
<rss version="2.0">
	<channel>
		<title>Brobin's Blog</title>
		<link>http://brobin/me/</link>
		<description>Technology, Dogecoin, Song of the Day, and more!</description>
		<language>English</language>
		<image>
			<title>website Logo</title>
			<url></url>
			<link>http://brobin.me/images/profile.jpg</link> 
			<width>130</width>
			<height>130</height>
		</image>

	@foreach($posts as $post)
		<item>
			<title>{{ $post->title }}</title>
			<link>http://brobin.me/blog/{{ $post->url }}</link>
			<description>{{ substr(strip_tags($post->content), 0, 150) }}</description>
			<date>{{ $post->created_at }}</date>
		</item>
	@endforeach

	</channel>
</rss>
