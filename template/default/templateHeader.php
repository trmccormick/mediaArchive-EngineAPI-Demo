<!DOCTYPE html>
<html lang="en">
<head>

    <title>{local var="pageName"}</title>

    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="True">

    <!-- Author, Description, Favicon, and Keywords -->
    <meta name="author" content="{local var="meta_authors"}">
    <meta name="description" content="{local var="meta_description"}">
    <meta name="keywords" content="{local var="meta_keywords"}">

    <!-- Project Specific Head Includes -->
    <?php recurseInsert("includes/headerIncludes.php","php") ?>
</head>

<body>

<header>
    <div class="container">

        <div id="banner">
          <div id="container">
              <img src="/includes/images/media-archive-page-header.jpg" alt="Banner"/>
          </div>
        </div>

        <div class="siteTitle col-xs-12 col-sm-4">
            <h1> {local var="appName"} </h1>
            <blockquote>
                Tracking your media, <br> saving you time.
            </blockquote>
        </div>
        <nav class="actions col-xs-12 col-sm-8 null-padding">
            <?php recurseInsert("includes/nav.php","php") ?>
        </nav>
    </div>
</header>
