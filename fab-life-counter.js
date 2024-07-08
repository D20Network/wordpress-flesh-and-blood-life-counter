jQuery(document).ready(function($) {
    $('.hero-select').change(function() {
        var player = $(this).data('player');
        var life = $(this).val();
        $('.life-total[data-player="' + player + '"] .life-value').text(life);
    });

    $('.increment-life').click(function() {
        var player = $(this).data('player');
        var lifeElement = $('.life-total[data-player="' + player + '"] .life-value');
        var life = parseInt(lifeElement.text());
        life += 1;
        lifeElement.text(life);
    });

    $('.decrement-life').click(function() {
        var player = $(this).data('player');
        var lifeElement = $('.life-total[data-player="' + player + '"] .life-value');
        var life = parseInt(lifeElement.text());
        life -= 1;
        lifeElement.text(life);
    });

    $('.reset-life').click(function() {
        var player = $(this).data('player');
        var life = $('#hero-select-' + player).val();
        $('.life-total[data-player="' + player + '"] .life-value').text(life);
    });

    $('.increment-counter').click(function() {
        var player = $(this).data('player');
        var counter = $(this).data('counter');
        var counterElement = $('.additional-counters[data-player="' + player + '"] .counter[data-counter="' + counter + '"] .counter-value');
        var value = parseInt(counterElement.text());
        value += 1;
        counterElement.text(value);
    });

    $('.decrement-counter').click(function() {
        var player = $(this).data('player');
        var counter = $(this).data('counter');
        var counterElement = $('.additional-counters[data-player="' + player + '"] .counter[data-counter="' + counter + '"] .counter-value');
        var value = parseInt(counterElement.text());
        value -= 1;
        counterElement.text(value);
    });
});
