<?php

/*================================================================ User
*/

function mediumm_get_wpauthor_id() {
  return get_the_author_meta( 'ID' );
}

function mediumm_get_wpauthor_avatar_url() {
  return get_avatar_url( mediumm_get_wpauthor_id() );
}
