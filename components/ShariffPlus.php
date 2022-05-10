<?php namespace Alexwenzel\ShariffPlus\Components;

use Cms\Classes\ComponentBase;

/**
 * ShariffPlus Component
 */
class ShariffPlus extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ShariffPlus Component',
            'description' => 'Shariff-Plus enables website users to share and like their favorite content without compromising their privacy.'
        ];
    }

    public function defineProperties()
    {
        return [
            'complete'             => [
                'title'       => 'Shariff Complete',
                'description' => 'Include complete shariff assets or minimal ones',
                'type'        => 'checkbox',
                'default'     => false
            ],
            'url'                  => [
                'title'       => 'Url',
                'description' => 'Url',
                'type'        => 'string',
                'required'    => true
            ],
            'backend-url'          => ['title' => 'backend-url', 'description' => 'property data-backend-url', 'type' => 'string',],
            'button-style'         => ['title' => 'button-style', 'description' => 'property data-button-style', 'type' => 'string',],
            'dialogs-media-url'    => ['title' => 'dialogs-media-url', 'description' => 'property data-dialogs-media-url', 'type' => 'string',],
            'facebook-count-btn'   => ['title' => 'facebook-count-btn', 'description' => 'property data-facebook-count-btn', 'type' => 'string',],
            'facebooklike-css'     => ['title' => 'facebooklike-css', 'description' => 'property data-facebooklike-css', 'type' => 'string',],
            'facebooklike-options' => ['title' => 'facebooklike-options', 'description' => 'property data-facebooklike-options', 'type' => 'string',],
            'flattr-category'      => ['title' => 'flattr-category', 'description' => 'property data-flattr-category', 'type' => 'string',],
            'flattr-user'          => ['title' => 'flattr-user', 'description' => 'property data-flattr-user', 'type' => 'string',],
            'info-url'             => ['title' => 'info-url', 'description' => 'property data-info-url', 'type' => 'string',],
            'info-display'         => ['title' => 'info-display', 'description' => 'property data-info-display', 'type' => 'string',],
            'lang'                 => ['title' => 'lang', 'description' => 'property data-lang', 'type' => 'string',],
            'mail-body'            => ['title' => 'mail-body', 'description' => 'property data-mail-body', 'type' => 'string',],
            'mail-subject'         => ['title' => 'mail-subject', 'description' => 'property data-mail-subject', 'type' => 'string',],
            'mail-url'             => ['title' => 'mail-url', 'description' => 'property data-mail-url', 'type' => 'string',],
            'media-url'            => ['title' => 'media-url', 'description' => 'property data-media-url', 'type' => 'string',],
            'orientation'          => ['title' => 'orientation', 'description' => 'property data-orientation', 'type' => 'string',],
            'referrer-track'       => ['title' => 'referrer-track', 'description' => 'property data-referrer-track', 'type' => 'string',],
            'services'             => ['title' => 'services', 'description' => 'property data-services', 'type' => 'string',],
            'theme'                => ['title' => 'theme', 'description' => 'property data-theme', 'type' => 'string',],
            'title'                => ['title' => 'title', 'description' => 'property data-title', 'type' => 'string',],
            'twitter-via'          => ['title' => 'twitter-via', 'description' => 'property data-twitter-via', 'type' => 'string',],
        ];
    }

    public function onRun()
    {
        if ($this->property('complete')) {
            $this->addCss('assets/shariff.complete.css', 'Alexwenzel.ShariffPlus.css');
            $this->addJs('assets/shariff.complete.js', 'Alexwenzel.ShariffPlus.js');
        } else {
            $this->addCss('assets/shariff.min.css', 'Alexwenzel.ShariffPlus.css');
            $this->addJs('assets/shariff.min.js', 'Alexwenzel.ShariffPlus.js');
        }
    }
}
