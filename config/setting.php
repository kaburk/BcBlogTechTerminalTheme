<?php
/**
 * BcBlogTechTerminalTheme : baserCMS5 x
 *
 * スタイルの設定（scripts/new-blog-theme.sh が variants/terminal から書き出す）
 */
return [
    'BlogTheme' => [
        // スタイル名（<html data-variant>）
        'variant' => 'terminal',
        // Google Fonts（layout で読み込む）
        'fonts' => 'https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600;700&family=Noto+Sans+JP:wght@400;500;700&display=swap',
        // 配色モードの初期値（auto = OS の設定に合わせる／light = ライト／dark = ダーク）
        // 管理画面の「テーマ設定」で変えられる（テーマ設定の値が優先）
        'colorScheme' => 'dark',
        // ヘッダーにライト／ダークの切り替えボタンを出す（テーマ設定で変えられる）
        'schemeToggle' => true,
        // ヘッダー・フッターのナビの作り方（テーマ設定で変えられる）
        //   contents = コンテンツ管理のルート直下（ブログ・固定ページ・リンク・メールフォームなど）
        //   categories = 最初のブログのカテゴリ（第1階層）＋ルート直下の固定ページ
        'navSource' => 'contents',
        // トップの一覧の上に「タグから探す」を出す
        'tagStrip' => false,
        // テーマ設定の4色の初期値（css の代わりの値にも使う）
        'colors' => ['main' => '#f5a524', 'sub' => '#0d1117', 'link' => '#f5a524', 'hover' => '#ffd27a'],
    ],
];
