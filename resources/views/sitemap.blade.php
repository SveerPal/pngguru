<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($pages as $page)
        <url>
            <loc>{{ url('/') }}/page/{{ $page->slug }}</loc>
            <lastmod>{{ $page->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach ($images as $image)
        <url>
            <loc>{{ url('/') }}/image/{{ $image->slug }}</loc>
            <lastmod>{{ $image->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach ($images_categories as $cat)
        <url>
            <loc>{{ url('/') }}/category/{{ $cat->slug }}</loc>
            <lastmod>{{ $cat->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach ($images_tags as $tag)
        <url>
            <loc>{{ url('/') }}/tag/{{ $tag->slug }}</loc>
            <lastmod>{{ $tag->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
