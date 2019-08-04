<?php
//Include VUE.JS on project
function enqueue_scripts(){
   wp_enqueue_script('vue', 'https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js', [], '2.5.17');           
}

wp_enqueue_script('vueapp', plugin_dir_url( __FILE__ ) . 'main.js', [], '1.0', true);