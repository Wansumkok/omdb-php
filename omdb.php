<?php
/*PHP class for OMDB
Author: Carl Zhou
Version:1.02

Changes in 1.02:
-changed implementation of getting movie id, to allow more options
-added Rottentomatoes info
-added short or extended plot info
-forces user to specify a movie title or IMDB ID
-some minor coding changes for better implementation

Changes in 1.01:
-fixed bug that caused 400 errors
-added function for searching movies
-minor code changes

OMDB API by Brian Fritz
*/

require_once("omdb.class.php");
require_once("omdb_movie.class.php");
require_once("omdb_search.class.php");
?>
