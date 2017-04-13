<?php

/*================================================================ User
*/

function medm_get_wpauthor_id() {
  return get_the_author_meta( 'ID' );
}

function medm_get_wpauthor_avatar_url() {
  return get_avatar_url( medm_get_wpauthor_id() );
}
