<?php

if(TL_MODE === 'BE') {

    $assetPath = 'system/modules/insertTagBuddy/assets/';

    $GLOBALS['TL_JAVASCRIPT'][] = $assetPath . 'wordevents.js';
    $GLOBALS['TL_JAVASCRIPT'][] = $assetPath . 'inserTagBuddy.js';


    $GLOBALS['INSERTTAGBUDDY']['InsertTagsList'] = array(
        'link' => array
            (
            'link' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getPages'),
                'back' => array('slashworks\InserttagBuddy', 'useKeyAsValue'),
                'login' => array('slashworks\InserttagBuddy', 'useKeyAsValue')
            ),
            'link_open' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getPages')
            ),
            'link_url' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getPages')
            ),

            'link_title' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getPages')
            ),

            'link_close' => array
            (
                'single' => array('slashworks\InserttagBuddy', 'getPages')
            ),

            'article' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getArticles')
            ),
            'article_open' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getArticles')
            ),
            'article_url' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getArticles')
            ),
            'article_title' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getArticles')
            ),
            'news' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getNews')
            ),
            'news_open' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getNews')
            ),
            'news_url' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getNews')
            ),
            'news_title' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getNews')
            ),
            'event' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getEvents')
            ),
            'event_open' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getEvents')
            ),
            'event_url' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getEvents')
            ),
            'event_title' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getEvents')
            ),
            'faq' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getFaqs')
            ),
            'faq_open' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getFaqs')
            ),
            'faq_url' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getFaqs')
            ),
            'faq_title' => array
            (
                'id' => array('slashworks\InserttagBuddy', 'getFaqs')
            ),
        )
    );

}
