﻿<?php
  function doHeader( $head ) {
?>
  <link rel="icon" type="image/x-icon" href="../logo/header_logo.png">
	<link rel="stylesheet" href="../lib/octicons/octicons/octicons.css">
  <link href="../css/main.css" rel="stylesheet">

  <header>
    <div class="wrap">
      <a href="http://rsgis.whu.edu.cn/">
				<h4><img src="../logo/header_logo.png" height="25px" width="25px"></img> 研究生羽毛球赛</h4>
			</a>
    </div>
  </header>
	
	<article class="full">
  <div class="article-heading js-article-heading js-geopattern" style="background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDIiIGhlaWdodD0iMzAyIj48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJyZ2IoMzgsIDcwLCAxNDIpIiAgLz48cmVjdCB4PSIyLjgiIHk9IjIuOCIgd2lkdGg9IjM5LjE5OTk5OTk5OTk5OTk5NiIgaGVpZ2h0PSIzOS4xOTk5OTk5OTk5OTk5OTYiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNDY7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMTQuMCIgeT0iMTQuMCIgd2lkdGg9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgaGVpZ2h0PSIxNi43OTk5OTk5OTk5OTk5OTciIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNDY7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iNTMuMTk5OTk5OTk5OTk5OTkiIHk9IjIuOCIgd2lkdGg9IjM5LjE5OTk5OTk5OTk5OTk5NiIgaGVpZ2h0PSIzOS4xOTk5OTk5OTk5OTk5OTYiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSI2NC4zOTk5OTk5OTk5OTk5OSIgeT0iMTQuMCIgd2lkdGg9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgaGVpZ2h0PSIxNi43OTk5OTk5OTk5OTk5OTciIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xNTtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIxMDMuNTk5OTk5OTk5OTk5OTgiIHk9IjIuOCIgd2lkdGg9IjM5LjE5OTk5OTk5OTk5OTk5NiIgaGVpZ2h0PSIzOS4xOTk5OTk5OTk5OTk5OTYiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wOTg7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMTE0Ljc5OTk5OTk5OTk5OTk4IiB5PSIxNC4wIiB3aWR0aD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBoZWlnaHQ9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA1NDY2NjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDo1LjZweDsiICAvPjxyZWN0IHg9IjE1NC4wIiB5PSIyLjgiIHdpZHRoPSIzOS4xOTk5OTk5OTk5OTk5OTYiIGhlaWdodD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTI0MDAwMDAwMDAwMDAwMDE7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMTY1LjIiIHk9IjE0LjAiIHdpZHRoPSIxNi43OTk5OTk5OTk5OTk5OTciIGhlaWdodD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDg5MzMzMzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMjA0LjM5OTk5OTk5OTk5OTk4IiB5PSIyLjgiIHdpZHRoPSIzOS4xOTk5OTk5OTk5OTk5OTYiIGhlaWdodD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTE1MzMzMzMzMzMzMzMzMzQ7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMjE1LjU5OTk5OTk5OTk5OTk3IiB5PSIxNC4wIiB3aWR0aD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBoZWlnaHQ9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAyO3N0cm9rZS13aWR0aDo1LjZweDsiICAvPjxyZWN0IHg9IjI1NC43OTk5OTk5OTk5OTk5OCIgeT0iMi44IiB3aWR0aD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBoZWlnaHQ9IjM5LjE5OTk5OTk5OTk5OTk5NiIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAzNzMzMzMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDo1LjZweDsiICAvPjxyZWN0IHg9IjI2Ni4wIiB5PSIxNC4wIiB3aWR0aD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBoZWlnaHQ9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAzNzMzMzMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDo1LjZweDsiICAvPjxyZWN0IHg9IjIuOCIgeT0iNTMuMTk5OTk5OTk5OTk5OTkiIHdpZHRoPSIzOS4xOTk5OTk5OTk5OTk5OTYiIGhlaWdodD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDk4O3N0cm9rZS13aWR0aDo1LjZweDsiICAvPjxyZWN0IHg9IjE0LjAiIHk9IjY0LjM5OTk5OTk5OTk5OTk5IiB3aWR0aD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBoZWlnaHQ9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjE0MTMzMzMzMzMzMzMzMzM0O3N0cm9rZS13aWR0aDo1LjZweDsiICAvPjxyZWN0IHg9IjUzLjE5OTk5OTk5OTk5OTk5IiB5PSI1My4xOTk5OTk5OTk5OTk5OSIgd2lkdGg9IjM5LjE5OTk5OTk5OTk5OTk5NiIgaGVpZ2h0PSIzOS4xOTk5OTk5OTk5OTk5OTYiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNjMzMzMzMzMzMzMzMzMzNDtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSI2NC4zOTk5OTk5OTk5OTk5OSIgeT0iNjQuMzk5OTk5OTk5OTk5OTkiIHdpZHRoPSIxNi43OTk5OTk5OTk5OTk5OTciIGhlaWdodD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDg5MzMzMzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMTAzLjU5OTk5OTk5OTk5OTk4IiB5PSI1My4xOTk5OTk5OTk5OTk5OSIgd2lkdGg9IjM5LjE5OTk5OTk5OTk5OTk5NiIgaGVpZ2h0PSIzOS4xOTk5OTk5OTk5OTk5OTYiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xNTtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIxMTQuNzk5OTk5OTk5OTk5OTgiIHk9IjY0LjM5OTk5OTk5OTk5OTk5IiB3aWR0aD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBoZWlnaHQ9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA5ODtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIxNTQuMCIgeT0iNTMuMTk5OTk5OTk5OTk5OTkiIHdpZHRoPSIzOS4xOTk5OTk5OTk5OTk5OTYiIGhlaWdodD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTMyNjY2NjY2NjY2NjY2NjU7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMTY1LjIiIHk9IjY0LjM5OTk5OTk5OTk5OTk5IiB3aWR0aD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBoZWlnaHQ9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAyO3N0cm9rZS13aWR0aDo1LjZweDsiICAvPjxyZWN0IHg9IjIwNC4zOTk5OTk5OTk5OTk5OCIgeT0iNTMuMTk5OTk5OTk5OTk5OTkiIHdpZHRoPSIzOS4xOTk5OTk5OTk5OTk5OTYiIGhlaWdodD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDg5MzMzMzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMjE1LjU5OTk5OTk5OTk5OTk3IiB5PSI2NC4zOTk5OTk5OTk5OTk5OSIgd2lkdGg9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgaGVpZ2h0PSIxNi43OTk5OTk5OTk5OTk5OTciIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMDY2NjY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIyNTQuNzk5OTk5OTk5OTk5OTgiIHk9IjUzLjE5OTk5OTk5OTk5OTk5IiB3aWR0aD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBoZWlnaHQ9IjM5LjE5OTk5OTk5OTk5OTk5NiIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjEyNDAwMDAwMDAwMDAwMDAxO3N0cm9rZS13aWR0aDo1LjZweDsiICAvPjxyZWN0IHg9IjI2Ni4wIiB5PSI2NC4zOTk5OTk5OTk5OTk5OSIgd2lkdGg9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgaGVpZ2h0PSIxNi43OTk5OTk5OTk5OTk5OTciIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNTQ2NjY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIyLjgiIHk9IjEwMy41OTk5OTk5OTk5OTk5OCIgd2lkdGg9IjM5LjE5OTk5OTk5OTk5OTk5NiIgaGVpZ2h0PSIzOS4xOTk5OTk5OTk5OTk5OTYiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xNDEzMzMzMzMzMzMzMzMzNDtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIxNC4wIiB5PSIxMTQuNzk5OTk5OTk5OTk5OTgiIHdpZHRoPSIxNi43OTk5OTk5OTk5OTk5OTciIGhlaWdodD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDI7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iNTMuMTk5OTk5OTk5OTk5OTkiIHk9IjEwMy41OTk5OTk5OTk5OTk5OCIgd2lkdGg9IjM5LjE5OTk5OTk5OTk5OTk5NiIgaGVpZ2h0PSIzOS4xOTk5OTk5OTk5OTk5OTYiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMjQwMDAwMDAwMDAwMDAwMTtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSI2NC4zOTk5OTk5OTk5OTk5OSIgeT0iMTE0Ljc5OTk5OTk5OTk5OTk4IiB3aWR0aD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBoZWlnaHQ9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjAyODY2NjY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIxMDMuNTk5OTk5OTk5OTk5OTgiIHk9IjEwMy41OTk5OTk5OTk5OTk5OCIgd2lkdGg9IjM5LjE5OTk5OTk5OTk5OTk5NiIgaGVpZ2h0PSIzOS4xOTk5OTk5OTk5OTk5OTYiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNzIwMDAwMDAwMDAwMDAwMTtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIxMTQuNzk5OTk5OTk5OTk5OTgiIHk9IjExNC43OTk5OTk5OTk5OTk5OCIgd2lkdGg9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgaGVpZ2h0PSIxNi43OTk5OTk5OTk5OTk5OTciIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNjMzMzMzMzMzMzMzMzMzNDtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIxNTQuMCIgeT0iMTAzLjU5OTk5OTk5OTk5OTk4IiB3aWR0aD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBoZWlnaHQ9IjM5LjE5OTk5OTk5OTk5OTk5NiIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAyO3N0cm9rZS13aWR0aDo1LjZweDsiICAvPjxyZWN0IHg9IjE2NS4yIiB5PSIxMTQuNzk5OTk5OTk5OTk5OTgiIHdpZHRoPSIxNi43OTk5OTk5OTk5OTk5OTciIGhlaWdodD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDcyMDAwMDAwMDAwMDAwMDE7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMjA0LjM5OTk5OTk5OTk5OTk4IiB5PSIxMDMuNTk5OTk5OTk5OTk5OTgiIHdpZHRoPSIzOS4xOTk5OTk5OTk5OTk5OTYiIGhlaWdodD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTMyNjY2NjY2NjY2NjY2NjU7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMjE1LjU5OTk5OTk5OTk5OTk3IiB5PSIxMTQuNzk5OTk5OTk5OTk5OTgiIHdpZHRoPSIxNi43OTk5OTk5OTk5OTk5OTciIGhlaWdodD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDI4NjY2NjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDo1LjZweDsiICAvPjxyZWN0IHg9IjI1NC43OTk5OTk5OTk5OTk5OCIgeT0iMTAzLjU5OTk5OTk5OTk5OTk4IiB3aWR0aD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBoZWlnaHQ9IjM5LjE5OTk5OTk5OTk5OTk5NiIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAzNzMzMzMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDo1LjZweDsiICAvPjxyZWN0IHg9IjI2Ni4wIiB5PSIxMTQuNzk5OTk5OTk5OTk5OTgiIHdpZHRoPSIxNi43OTk5OTk5OTk5OTk5OTciIGhlaWdodD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDI7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMi44IiB5PSIxNTQuMCIgd2lkdGg9IjM5LjE5OTk5OTk5OTk5OTk5NiIgaGVpZ2h0PSIzOS4xOTk5OTk5OTk5OTk5OTYiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wOTg7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMTQuMCIgeT0iMTY1LjIiIHdpZHRoPSIxNi43OTk5OTk5OTk5OTk5OTciIGhlaWdodD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDM3MzMzMzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iNTMuMTk5OTk5OTk5OTk5OTkiIHk9IjE1NC4wIiB3aWR0aD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBoZWlnaHQ9IjM5LjE5OTk5OTk5OTk5OTk5NiIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAzNzMzMzMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDo1LjZweDsiICAvPjxyZWN0IHg9IjY0LjM5OTk5OTk5OTk5OTk5IiB5PSIxNjUuMiIgd2lkdGg9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgaGVpZ2h0PSIxNi43OTk5OTk5OTk5OTk5OTciIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMzI2NjY2NjY2NjY2NjY2NTtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIxMDMuNTk5OTk5OTk5OTk5OTgiIHk9IjE1NC4wIiB3aWR0aD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBoZWlnaHQ9IjM5LjE5OTk5OTk5OTk5OTk5NiIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjEzMjY2NjY2NjY2NjY2NjY1O3N0cm9rZS13aWR0aDo1LjZweDsiICAvPjxyZWN0IHg9IjExNC43OTk5OTk5OTk5OTk5OCIgeT0iMTY1LjIiIHdpZHRoPSIxNi43OTk5OTk5OTk5OTk5OTciIGhlaWdodD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDM3MzMzMzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMTU0LjAiIHk9IjE1NC4wIiB3aWR0aD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBoZWlnaHQ9IjM5LjE5OTk5OTk5OTk5OTk5NiIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAzNzMzMzMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDo1LjZweDsiICAvPjxyZWN0IHg9IjE2NS4yIiB5PSIxNjUuMiIgd2lkdGg9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgaGVpZ2h0PSIxNi43OTk5OTk5OTk5OTk5OTciIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wOTg7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMjA0LjM5OTk5OTk5OTk5OTk4IiB5PSIxNTQuMCIgd2lkdGg9IjM5LjE5OTk5OTk5OTk5OTk5NiIgaGVpZ2h0PSIzOS4xOTk5OTk5OTk5OTk5OTYiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIyMTUuNTk5OTk5OTk5OTk5OTciIHk9IjE2NS4yIiB3aWR0aD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBoZWlnaHQ9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAzNzMzMzMzMzMzMzMzMzMzO3N0cm9rZS13aWR0aDo1LjZweDsiICAvPjxyZWN0IHg9IjI1NC43OTk5OTk5OTk5OTk5OCIgeT0iMTU0LjAiIHdpZHRoPSIzOS4xOTk5OTk5OTk5OTk5OTYiIGhlaWdodD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMDI4NjY2NjY2NjY2NjY2NjY3O3N0cm9rZS13aWR0aDo1LjZweDsiICAvPjxyZWN0IHg9IjI2Ni4wIiB5PSIxNjUuMiIgd2lkdGg9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgaGVpZ2h0PSIxNi43OTk5OTk5OTk5OTk5OTciIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMzI2NjY2NjY2NjY2NjY2NTtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIyLjgiIHk9IjIwNC4zOTk5OTk5OTk5OTk5OCIgd2lkdGg9IjM5LjE5OTk5OTk5OTk5OTk5NiIgaGVpZ2h0PSIzOS4xOTk5OTk5OTk5OTk5OTYiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wNzIwMDAwMDAwMDAwMDAwMTtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIxNC4wIiB5PSIyMTUuNTk5OTk5OTk5OTk5OTciIHdpZHRoPSIxNi43OTk5OTk5OTk5OTk5OTciIGhlaWdodD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDI7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iNTMuMTk5OTk5OTk5OTk5OTkiIHk9IjIwNC4zOTk5OTk5OTk5OTk5OCIgd2lkdGg9IjM5LjE5OTk5OTk5OTk5OTk5NiIgaGVpZ2h0PSIzOS4xOTk5OTk5OTk5OTk5OTYiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNjMzMzMzMzMzMzMzMzMzNDtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSI2NC4zOTk5OTk5OTk5OTk5OSIgeT0iMjE1LjU5OTk5OTk5OTk5OTk3IiB3aWR0aD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBoZWlnaHQ9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjA3MjAwMDAwMDAwMDAwMDAxO3N0cm9rZS13aWR0aDo1LjZweDsiICAvPjxyZWN0IHg9IjEwMy41OTk5OTk5OTk5OTk5OCIgeT0iMjA0LjM5OTk5OTk5OTk5OTk4IiB3aWR0aD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBoZWlnaHQ9IjM5LjE5OTk5OTk5OTk5OTk5NiIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjAyODY2NjY2NjY2NjY2NjY2NztzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIxMTQuNzk5OTk5OTk5OTk5OTgiIHk9IjIxNS41OTk5OTk5OTk5OTk5NyIgd2lkdGg9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgaGVpZ2h0PSIxNi43OTk5OTk5OTk5OTk5OTciIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4xMjQwMDAwMDAwMDAwMDAwMTtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIxNTQuMCIgeT0iMjA0LjM5OTk5OTk5OTk5OTk4IiB3aWR0aD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBoZWlnaHQ9IjM5LjE5OTk5OTk5OTk5OTk5NiIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjAyO3N0cm9rZS13aWR0aDo1LjZweDsiICAvPjxyZWN0IHg9IjE2NS4yIiB5PSIyMTUuNTk5OTk5OTk5OTk5OTciIHdpZHRoPSIxNi43OTk5OTk5OTk5OTk5OTciIGhlaWdodD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTQxMzMzMzMzMzMzMzMzMzQ7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMjA0LjM5OTk5OTk5OTk5OTk4IiB5PSIyMDQuMzk5OTk5OTk5OTk5OTgiIHdpZHRoPSIzOS4xOTk5OTk5OTk5OTk5OTYiIGhlaWdodD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDU0NjY2NjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMjE1LjU5OTk5OTk5OTk5OTk3IiB5PSIyMTUuNTk5OTk5OTk5OTk5OTciIHdpZHRoPSIxNi43OTk5OTk5OTk5OTk5OTciIGhlaWdodD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTI0MDAwMDAwMDAwMDAwMDE7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMjU0Ljc5OTk5OTk5OTk5OTk4IiB5PSIyMDQuMzk5OTk5OTk5OTk5OTgiIHdpZHRoPSIzOS4xOTk5OTk5OTk5OTk5OTYiIGhlaWdodD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMTA2NjY2NjY2NjY2NjY2Njc7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMjY2LjAiIHk9IjIxNS41OTk5OTk5OTk5OTk5NyIgd2lkdGg9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgaGVpZ2h0PSIxNi43OTk5OTk5OTk5OTk5OTciIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wODkzMzMzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIyLjgiIHk9IjI1NC43OTk5OTk5OTk5OTk5OCIgd2lkdGg9IjM5LjE5OTk5OTk5OTk5OTk5NiIgaGVpZ2h0PSIzOS4xOTk5OTk5OTk5OTk5OTYiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIxNC4wIiB5PSIyNjYuMCIgd2lkdGg9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgaGVpZ2h0PSIxNi43OTk5OTk5OTk5OTk5OTciIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4xMzI2NjY2NjY2NjY2NjY2NTtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSI1My4xOTk5OTk5OTk5OTk5OSIgeT0iMjU0Ljc5OTk5OTk5OTk5OTk4IiB3aWR0aD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBoZWlnaHQ9IjM5LjE5OTk5OTk5OTk5OTk5NiIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjIyIiBzdHlsZT0ib3BhY2l0eTowLjA5ODtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSI2NC4zOTk5OTk5OTk5OTk5OSIgeT0iMjY2LjAiIHdpZHRoPSIxNi43OTk5OTk5OTk5OTk5OTciIGhlaWdodD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTU7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMTAzLjU5OTk5OTk5OTk5OTk4IiB5PSIyNTQuNzk5OTk5OTk5OTk5OTgiIHdpZHRoPSIzOS4xOTk5OTk5OTk5OTk5OTYiIGhlaWdodD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDg5MzMzMzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMTE0Ljc5OTk5OTk5OTk5OTk4IiB5PSIyNjYuMCIgd2lkdGg9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgaGVpZ2h0PSIxNi43OTk5OTk5OTk5OTk5OTciIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wNjMzMzMzMzMzMzMzMzMzNDtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIxNTQuMCIgeT0iMjU0Ljc5OTk5OTk5OTk5OTk4IiB3aWR0aD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBoZWlnaHQ9IjM5LjE5OTk5OTk5OTk5OTk5NiIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZGRkIiBzdHlsZT0ib3BhY2l0eTowLjE0MTMzMzMzMzMzMzMzMzM0O3N0cm9rZS13aWR0aDo1LjZweDsiICAvPjxyZWN0IHg9IjE2NS4yIiB5PSIyNjYuMCIgd2lkdGg9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgaGVpZ2h0PSIxNi43OTk5OTk5OTk5OTk5OTciIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzIyMiIgc3R5bGU9Im9wYWNpdHk6MC4wOTg7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMjA0LjM5OTk5OTk5OTk5OTk4IiB5PSIyNTQuNzk5OTk5OTk5OTk5OTgiIHdpZHRoPSIzOS4xOTk5OTk5OTk5OTk5OTYiIGhlaWdodD0iMzkuMTk5OTk5OTk5OTk5OTk2IiBmaWxsPSJub25lIiBzdHJva2U9IiNkZGQiIHN0eWxlPSJvcGFjaXR5OjAuMDM3MzMzMzMzMzMzMzMzMzM7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PHJlY3QgeD0iMjE1LjU5OTk5OTk5OTk5OTk3IiB5PSIyNjYuMCIgd2lkdGg9IjE2Ljc5OTk5OTk5OTk5OTk5NyIgaGVpZ2h0PSIxNi43OTk5OTk5OTk5OTk5OTciIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMzczMzMzMzMzMzMzMzMzMztzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIyNTQuNzk5OTk5OTk5OTk5OTgiIHk9IjI1NC43OTk5OTk5OTk5OTk5OCIgd2lkdGg9IjM5LjE5OTk5OTk5OTk5OTk5NiIgaGVpZ2h0PSIzOS4xOTk5OTk5OTk5OTk5OTYiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2RkZCIgc3R5bGU9Im9wYWNpdHk6MC4wMjtzdHJva2Utd2lkdGg6NS42cHg7IiAgLz48cmVjdCB4PSIyNjYuMCIgeT0iMjY2LjAiIHdpZHRoPSIxNi43OTk5OTk5OTk5OTk5OTciIGhlaWdodD0iMTYuNzk5OTk5OTk5OTk5OTk3IiBmaWxsPSJub25lIiBzdHJva2U9IiMyMjIiIHN0eWxlPSJvcGFjaXR5OjAuMTE1MzMzMzMzMzMzMzMzMzQ7c3Ryb2tlLXdpZHRoOjUuNnB4OyIgIC8+PC9zdmc+);">
    <div class="wrap">
      <h1><?php echo $head; ?></h1>
    </div>
  </div>
  <div class="wrap">
    <div class="markdown-body content-body ">
<?php
  }
	
	function doFooter() {
?>
	  </div>
  </div>
	</article>
	<footer>
    <div class="wrap">
      <image src="../logo/logo.png" width="58px" height="36px"></image>
      <p>
				遥感信息工程学院研究生会体育部
      </p>
			<p>Contact: 496474070@qq.com</p>
    </div>
  </footer>
<?php
	}
?>	  
