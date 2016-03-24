<?php
namespace App\Presenters;

use Illuminate\Pagination\SimpleBootstrapFourPresenter;

class AlignedPagerPresenter extends SimpleBootstrapFourPresenter {

    function getPreviousButton($text = '&laquo;') {
        if ($this->paginator->currentPage() <= 1) {
            return '<li class="previous disabled"><span>'.$text.'</span></li>';
        }else{
            $url = $this->paginator->url($this->paginator->currentPage() - 1);

            return '<li class="previous"><a href="'.$url.'"">'.$text.'</a></li>';
        }
    }

    function getNextButton($text = '&raquo;') {
        if ($this->paginator->hasMorePages() === false) {
            return '<li class="next disabled"><span>'.$text.'</span></li>';;
        }else{
            $url = $this->paginator->url($this->paginator->currentPage() + 1);

            return '<li class="next"><a href="'.$url.'"">'.$text.'</a></li>';
        }
    }

}
