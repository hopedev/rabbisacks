<?php

namespace Roots\Sage\Titles;

/**
 * Page titles
 */
function title() {
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    } else {
      return __('Latest Posts', 'sage');
    }
  } elseif (is_post_type_archive('project') ){
       return __('Work', 'sage');   
  } elseif (is_archive()) {
    return get_the_archive_title();
  } elseif (is_search()) {
    return sprintf(__('Search Results for "%s"', 'sage'), get_search_query());
  } elseif (is_404()) {
    return __('Not Found', 'sage');
  } elseif (is_page()) {


      if(is_page(get_landing_pages('cc'))){ // cc home
        return "Latest Commentary";
      }elseif(is_page(get_landing_pages('audio'))){ // audio home
        return "Latest Audio";
      }elseif(is_page(get_landing_pages('video'))){ // cc home
        return "Latest Videos";
      }elseif(is_page(get_landing_pages('text'))){ // cc home
        return "Latest Writing";
      }elseif(is_page(get_landing_pages('books'))){ // cc home
        return "Latest Books";
      }else{
    return get_the_title();
  }
  } else{
    return get_the_title();
  }
}
