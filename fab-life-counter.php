<?php
/**
 * Plugin Name: Flesh and Blood Life Counter
 * Description: A life counter for the Flesh and Blood card game with additional game-specific counters.
 * Version: 1.0
 * Author: Void, Corp
 * License: GPL2
 */

function fab_life_counter_enqueue_scripts() {
    wp_enqueue_style('fab-life-counter-css', plugin_dir_url(__FILE__) . 'fab-life-counter.css');
    wp_enqueue_script('fab-life-counter-js', plugin_dir_url(__FILE__) . 'fab-life-counter.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'fab_life_counter_enqueue_scripts');

function fab_life_counter_shortcode() {
    ob_start();
    ?>
    <div class="fab-life-counter-container">
        <h1>Flesh and Blood Life Counter</h1>
        <?php for ($i = 1; $i <= 4; $i++) { ?>
        <div class="player-container" data-player="<?php echo $i; ?>">
            <h2>Player <?php echo $i; ?></h2>
            <label for="hero-select-<?php echo $i; ?>">Select Hero:</label>
            <select class="hero-select" id="hero-select-<?php echo $i; ?>" data-player="<?php echo $i; ?>">
                <option value="40">Adult Hero</option>
                <option value="20">Young Hero</option>
            </select>
            <div class="life-total" data-player="<?php echo $i; ?>">Life: <span class="life-value">40</span></div>
            <button class="increment-life" data-player="<?php echo $i; ?>">+1</button>
            <button class="decrement-life" data-player="<?php echo $i; ?>">-1</button>
            <button class="reset-life" data-player="<?php echo $i; ?>">Reset</button>
            <div class="additional-counters" data-player="<?php echo $i; ?>">
                <div class="counter" data-counter="pitch">
                    <label>Pitch Value: <span class="counter-value">0</span></label>
                    <button class="increment-counter" data-counter="pitch" data-player="<?php echo $i; ?>">+1</button>
                    <button class="decrement-counter" data-counter="pitch" data-player="<?php echo $i; ?>">-1</button>
                </div>
                <div class="counter" data-counter="cost">
                    <label>Cost to Play: <span class="counter-value">0</span></label>
                    <button class="increment-counter" data-counter="cost" data-player="<?php echo $i; ?>">+1</button>
                    <button class="decrement-counter" data-counter="cost" data-player="<?php echo $i; ?>">-1</button>
                </div>
                <div class="counter" data-counter="attack">
                    <label>Attack Value: <span class="counter-value">0</span></label>
                    <button class="increment-counter" data-counter="attack" data-player="<?php echo $i; ?>">+1</button>
                    <button class="decrement-counter" data-counter="attack" data-player="<?php echo $i; ?>">-1</button>
                </div>
                <div class="counter" data-counter="defense">
                    <label>Defense Value: <span class="counter-value">0</span></label>
                    <button class="increment-counter" data-counter="defense" data-player="<?php echo $i; ?>">+1</button>
                    <button class="decrement-counter" data-counter="defense" data-player="<?php echo $i; ?>">-1</button>
                </div>
                <div class="counter" data-counter="action-points">
                    <label>Action Points: <span class="counter-value">0</span></label>
                    <button class="increment-counter" data-counter="action-points" data-player="<?php echo $i; ?>">+1</button>
                    <button class="decrement-counter" data-counter="action-points" data-player="<?php echo $i; ?>">-1</button>
                </div>
                <div class="counter" data-counter="resource-points">
                    <label>Resource Points: <span class="counter-value">0</span></label>
                    <button class="increment-counter" data-counter="resource-points" data-player="<?php echo $i; ?>">+1</button>
                    <button class="decrement-counter" data-counter="resource-points" data-player="<?php echo $i; ?>">-1</button>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('fab_life_counter', 'fab_life_counter_shortcode');
?>
