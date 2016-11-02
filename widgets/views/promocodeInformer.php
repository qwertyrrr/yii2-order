<div>
    <table class="table table-hover table-responsive">
    <thead>
        <tr>
            <th>Название</th>
            <th>С 1 числа</th>
            <th>За 30 дней</th>
            <th>За все время</th>
            <th>Средняя стоимость</th>
            <th>Доля промокода в заказах</th>
        </tr>
        <tr>
            <?php if ($promocodes): ?>
                <?php foreach ($promocodes as $key => $promocode):?>
                    <tr>
                        <td><?=$promocode['name']?></td>
                        <td><?=$promocode['thisMonth']?></td>
                        <td><?=$promocode['lastMonth']?></td>
                        <td><?=$promocode['allTime']?></td>
                        <td><?=$promocode['avgSum']?></td>
                        <td><?=$promocode['percent']?> %</td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tr>
    </thead>
    </table>
</div>