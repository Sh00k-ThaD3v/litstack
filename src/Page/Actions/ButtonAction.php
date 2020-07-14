<?php

namespace Fjord\Page\Actions;

use Fjord\Vue\Components\ButtonComponent;

class ButtonAction extends BaseAction
{
    /**
     * Create an action component.
     *
     * @param  string          $action
     * @return ButtonComponent
     */
    public function make($title, $action)
    {
        return $this->prepared($title, $action)
            ->variant('outline-primary');
    }

    /**
     * Create component instance.
     *
     * @return ButtonComponent
     */
    protected function createComponent()
    {
        return new ButtonComponent;
    }
}
