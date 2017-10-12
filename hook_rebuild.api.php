<?php

/**
 * @file
 * Module API File.
 * Module: hook_rebuild.
 *
 * Outlines usages of hooks created by this module.
 */

/**
 * Rebuild data based upon refreshed caches.
 *
 * This hook allows your module to rebuild its data based on the latest/current
 * module data. It runs after hook_flush_caches() so it can be assumed all
 * module data fetched here is fresh/current.
 *
 * IMPORTANT: Do not call exit() within this hook. It will stop execution of
 * all subsequent rebuild hooks and will annoy a lot of people.
 */
function hook_rebuild() {
  // Rebuild all cache heavy/dependent module functionality here.
  // Note: It is very likely that any output created during this hook will not
  // be displayed on screen. To check the hook is being invoked make use of the
  // watchdog() log functionality.
}
