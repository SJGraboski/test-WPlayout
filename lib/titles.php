<?php

namespace Roots\Sage\Titles;

/**
 * Page titles
 */
function title() {
  if (is_home()) {
    return __('Main Title', 'sage');
  } elseif (is_archive()) {
    return get_the_archive_title();
  } elseif (is_search()) {
    return sprintf(__('Search Results for %s', 'sage'), get_search_query());
  } elseif (is_404()) {
    return __('Not Found', 'sage');
  } else {
    return get_the_title();
  }
}

// Additional subtitle function for homepage.
function subtitle() {
  
  // Our subtitle
  $subhead = "Lorem ipsum dolor sit amet, eu est summo scripserit. Mei cu quod vol uptua";

  // If it's our homepage
  if (is_home()) {
    // return the string for page header to parse
    return $subhead;
  } 
  // otherwise return false.
  else {
    return false;
  }
}