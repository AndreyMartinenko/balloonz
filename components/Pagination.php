<?php

class Pagination
{
    private $max = 6;
    private $index = 'page';
    private $current_page;
    private $total;
    private $limit;

    public function __construct($total, $currentPage, $limit, $index)
    {
        $this->total = $total;

        $this->limit = $limit;
        //key in url
        $this->index = $index;
        // count pages
        $this->amount = $this->amount();
        // current page
        $this->setCurrentPage($currentPage);
    }

  
    public function get()
    {
        
        $links = null;

        //  end of loop
        $limits = $this->limits();

        $html = '<ul class="pagination">';
        // links generation
        for ($page = $limits[0]; $page <= $limits[1]; $page++) {
            if ($page == $this->current_page) {
                $links .= '<li class="active"><a href="#">' . $page . '</a></li>';
            } else {
                // links gener
                $links .= $this->generateHtml($page);
            }
        }

        if (!is_null($links)) {
            // current page not 1-st
            if ($this->current_page > 1)
            //link on 1-st page
                $links = $this->generateHtml(1, '&lt;') . $links;

            if ($this->current_page < $this->amount)
            // link on the lastPage
                $links .= $this->generateHtml($this->amount, '&gt;');
        }

        $html .= $links . '</ul>';

        return $html;
    }

    private function generateHtml($page, $text = null)
    {
        if (!$text)
        //текст - цифра страницы
            $text = $page;

        $currentURI = rtrim($_SERVER['REQUEST_URI'], '/') . '/';
        $currentURI = preg_replace('~/page-[0-9]+~', '', $currentURI);
        return
                '<li><a href="' . $currentURI . $this->index . $page . '">' . $text . '</a></li>';
    }

    private function limits()
    {
        // link from left
        $left = $this->current_page - round($this->max / 2);

        // start count
        $start = $left > 0 ? $left : 1;

        // before $this->max pages
        if ($start + $this->max <= $this->amount)
            $end = $start > 1 ? $start + $this->max : $this->max;
        else {
            // pages count
            $end = $this->amount;

            //$start -$this->max from END
            $start = $this->amount - $this->max > 0 ? $this->amount - $this->max : 1;
        }

        return
                array($start, $end);
    }


    private function setCurrentPage($currentPage)
    {
        // numb page
        $this->current_page = $currentPage;

        if ($this->current_page > 0) {
            if ($this->current_page > $this->amount)
            //last page
                $this->current_page = $this->amount;
        } else
        // 1-st page
            $this->current_page = 1;
    }


    private function amount()
    {
        return round($this->total / $this->limit);
    }

}