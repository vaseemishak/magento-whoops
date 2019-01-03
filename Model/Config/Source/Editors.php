<?php

namespace Mnm\Whoops\Model\Config\Source;

class Editors implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['label' => 'Select default editor', 'value' => ''],
            ['label' => 'phpstorm', 'value' => 'phpstorm'],
            ['label' => 'vscode', 'value' => 'vscode'],
            ['label' => 'sublime', 'value' => 'sublime'],
            ['label' => 'textmate', 'value' => 'textmate'],
            ['label' => 'emacs', 'value' => 'emacs'],
            ['label' => 'macvim', 'value' => 'macvim'],
            ['label' => 'idea', 'value' => 'idea'],
        ];
    }
}
