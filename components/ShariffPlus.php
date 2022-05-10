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
            'backendUrl'          => ['title' => 'backend-url', 'description' => 'property data-backend-url', 'type' => 'string',],
            'buttonStyle'         => ['title' => 'button-style', 'description' => 'property data-button-style', 'type' => 'string',],
            'dialogsMediaUrl'    => ['title' => 'dialogs-media-url', 'description' => 'property data-dialogs-media-url', 'type' => 'string',],
            'facebookCountBtn'   => ['title' => 'facebook-count-btn', 'description' => 'property data-facebook-count-btn', 'type' => 'string',],
            'facebooklikeCss'     => ['title' => 'facebooklike-css', 'description' => 'property data-facebooklike-css', 'type' => 'string',],
            'facebooklikeOptions' => ['title' => 'facebooklike-options', 'description' => 'property data-facebooklike-options', 'type' => 'string',],
            'flattrCategory'       => ['title' => 'flattr-category', 'description' => 'property data-flattr-category', 'type' => 'string',],
            'flattrUser'           => ['title' => 'flattr-user', 'description' => 'property data-flattr-user', 'type' => 'string',],
            'infoUrl'             => ['title' => 'info-url', 'description' => 'property data-info-url', 'type' => 'string',],
            'infoDisplay'         => ['title' => 'info-display', 'description' => 'property data-info-display', 'type' => 'string',],
            'lang'                 => ['title' => 'lang', 'description' => 'property data-lang', 'type' => 'string',],
            'mailBody'            => ['title' => 'mail-body', 'description' => 'property data-mail-body', 'type' => 'string',],
            'mailSubject'         => ['title' => 'mail-subject', 'description' => 'property data-mail-subject', 'type' => 'string',],
            'mailUrl'             => ['title' => 'mail-url', 'description' => 'property data-mail-url', 'type' => 'string',],
            'mediaUrl'            => ['title' => 'media-url', 'description' => 'property data-media-url', 'type' => 'string',],
            'orientation'          => ['title' => 'orientation', 'description' => 'property data-orientation', 'type' => 'string',],
            'referrerTrack'       => ['title' => 'referrer-track', 'description' => 'property data-referrer-track', 'type' => 'string',],
            'services'             => ['title' => 'services', 'description' => 'property data-services', 'type' => 'string',],
            'theme'                => ['title' => 'theme', 'description' => 'property data-theme', 'type' => 'string',],
            'title'                => ['title' => 'title', 'description' => 'property data-title', 'type' => 'string',],
            'twitterVia'          => ['title' => 'twitter-via', 'description' => 'property data-twitter-via', 'type' => 'string',],
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
