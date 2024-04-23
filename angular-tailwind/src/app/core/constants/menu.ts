import { MenuItem } from '../models/menu.model';

export class Menu {
  public static pages: MenuItem[] = [
    {
      group: 'Inicio',
      separator: false,
      items: [
        {
          icon: 'assets/icons/heroicons/outline/users.svg',
          label: 'Empleados',
          route: '/employees',
          children: [
            { label: 'Consulta', route: '/dashboard/employees' },
           // { label: 'Podcast', route: '/employees/show' },
          ],
        },

      ],
    },

    ];
}
