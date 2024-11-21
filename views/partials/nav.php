<?php

enum Role: int
{
    case Admin = 1;
    case Student = 2;
    case Pdc = 3;
    case Company = 4;
    case Lecturer = 5;
}

$navItems = [
    [
        'text' => 'Dashboard',
        'href' => '/dashboard/admin',
        'icon' => 'fa-dashboard',
        'only' => [Role::Admin],
    ],
    [
        'text' => 'Dashboard',
        'href' => '/dashboard/student',
        'icon' => 'fa-dashboard',
        'only' => [Role::Student],
    ],
    [
        'text' => 'Dashboard',
        'href' => '/dashboard/pdc',
        'icon' => 'fa-dashboard',
        'only' => [Role::Pdc],
    ],
    [
        'text' => 'Dashboard',
        'href' => '/dashboard/company',
        'icon' => 'fa-dashboard',
        'only' => [Role::Company],
    ],
    [
        'text' => 'Dashboard',
        'href' => '/dashboard/Lecturer',
        'icon' => 'fa-dashboard',
        'only' => [Role::Lecturer],
    ],

    [
        'text' => 'Jobs',
        'href' => '/jobs',
        'icon' => 'fa-briefcase',
        'only' => [Role::Student],
    ],
    [
        'text' => "PDC Users",
        'href' => '/pdc-users',
        'icon' => 'fa-users',
        'only' => [Role::Admin],
    ],
    [
        'text' => 'Account',
        'href' => '/account',
        'icon' => 'fa-user',
        'only' => [Role::Student, Role::Admin, Role::Pdc, Role::Company, Role::Lecturer],
    ],
    [
        'text' => "Add Lecture",
        'href' => '/add-lecture',
        'icon' => 'fa-fire-flame-curved',
        'only' => [Role::Admin]
    ],
    [
        'text' => "Add PDC",
        'href' => '/add-pdc',
        'icon' => 'fa-square-poll-horizontal',
        'only' => [Role::Admin]
    ],
    [
        'text' => "Addition Form",
        'href' => '/addition-form',
        'icon' => 'fa-sheet-plastic',
        'only' => [Role::Admin]
    ],
    [
        'text' => 'Calendar',
        'href' => '/calendar',
        'icon' => 'fa-fire-flame-curved',
        'only' => [Role::Lecturer],
    ],
    [
        'text' => 'Report',
        'href' => '/report',
        'icon' => 'fa-sheet-plastic',
        'only' => [Role::Lecturer],
    ],
    [
        'text' => "Complaints",
        'href' => '/complaints',
        'icon' => 'fa-users',
        'only' => [Role::Admin],
    ],
    [
        'text' => "CRUD",
        'href' => '/crud',
        'icon' => 'fa-user',
        'only' => [Role::Admin],
    ],
    
];

function filterNavItemsByRole($navItems, $userRole)
{
    return array_filter($navItems, function ($item) use ($userRole) {

        return !isset($item['only']) || in_array(
                $userRole,
                array_map(fn($role) => $role->value, $item['only'])
            );
    });
}

?>

<nav role="navigation" aria-label="main navigation"
     style="position: fixed; left: 0; top: 0; height: 100vh; width: 50px;">
    <div style="height: 100vh; display: flex; flex-direction: column; justify-content: space-between; border-right: 1px solid #d1d5db; padding-inline: 5px">
        <div style="display: flex; flex-direction: column; gap: 0.5rem; margin-top: 0.5rem">
            <?php foreach (filterNavItemsByRole($navItems, $_SESSION['user']['role']) as $item) : ?>
                <a href="<?= $item['href'] ?>"
                   class="tooltip"
                   style="border-radius: 9999px; padding-block: 0.6rem; text-align: center; <?= urlIs($item['href']) ? 'outline: 1px solid; color: #0ea5e9; background-color: white;' : 'color: #4b5563; outline: 1px solid #e5e7eb;' ?>"
                >
                    <i class="fa-solid <?= $item['icon'] ?> fa-lg"></i>
                    <span class="tooltiptext">
                        <?= $item['text'] ?>
                    </span>
                </a>
            <?php endforeach ?>
        </div>

        <div style="display: flex; flex-direction: column; margin-bottom: 0.5rem">
            <form style="width: 100%; margin: 0;" action="/sessions" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <button style="width: 100%; margin: 0; color: #be123c;" class="astext">
                    <i class="fa-solid fa-arrow-right-from-bracket fa-lg"></i>
                </button>
            </form>
        </div>
    </div>
</nav>
