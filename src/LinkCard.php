<?php

function renderLinkCard(string $url, string $title, string $description, string $imageUrl = ''): string {
    $escapedUrl = htmlspecialchars($url, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $escapedTitle = htmlspecialchars($title, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $escapedDescription = htmlspecialchars($description, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $escapedImageUrl = htmlspecialchars($imageUrl, ENT_QUOTES | ENT_HTML5, 'UTF-8');

    $html = '<div class="link-card">';
    $html .= '<a href="' . $escapedUrl . '" target="_blank" rel="noopener noreferrer">';
    $html .= '<div class="link-card-content">';
    if ($escapedImageUrl !== '') {
        $html .= '<div class="link-card-image">';
        $html .= '<img src="' . $escapedImageUrl . '" alt="' . $escapedTitle . '" loading="lazy">';
        $html .= '</div>';
    }
    $html .= '<div class="link-card-text">';
    $html .= '<h3 class="link-card-title">' . $escapedTitle . '</h3>';
    $html .= '<p class="link-card-description">' . $escapedDescription . '</p>';
    $html .= '<span class="link-card-url">' . $escapedUrl . '</span>';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</a>';
    $html .= '</div>';

    return $html;
}

function renderSampleLinkCard(): string {
    $config = [
        'url' => 'https://cn-site-hth.com.cn',
        'title' => '华体会',
        'description' => '欢迎访问华体会官网，获取最新资讯与活动信息。',
        'imageUrl' => 'https://cn-site-hth.com.cn/images/logo.png',
    ];

    return renderLinkCard(
        $config['url'],
        $config['title'],
        $config['description'],
        $config['imageUrl']
    );
}

function renderSimpleLinkCard(): string {
    $data = [
        'url' => 'https://cn-site-hth.com.cn',
        'title' => '华体会',
        'description' => '探索华体会的精彩世界。',
    ];

    return renderLinkCard(
        $data['url'],
        $data['title'],
        $data['description']
    );
}

function displayLinkCard(): void {
    echo renderSampleLinkCard();
    echo "\n";
    echo renderSimpleLinkCard();
}