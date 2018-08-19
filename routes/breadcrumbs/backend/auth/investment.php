<?php

Breadcrumbs::for('admin.auth.investment.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push(__('Invetment Management'), route('admin.auth.investment.index'));
});

Breadcrumbs::for('admin.auth.investment.create', function ($trail) {
    $trail->parent('admin.auth.investment.index');
    $trail->push(__('Invetment Management'), route('admin.auth.investment.create'));
});

Breadcrumbs::for('admin.auth.investment.show', function ($trail, $id) {
    $trail->parent('admin.auth.investment.index');
    $trail->push(__('Invetment Management'), route('admin.auth.investment.show', $id));
});