<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $super_admin = Role::create(['name' => 'super_admin']);
        $user = Role::create(['name' => 'user']);
        $reseller = Role::create(['name' => 'reseller']);
        $customer = Role::create(['name' => 'customer']);

        //me permission
        $me = Permission::create(['name' => 'me']);

        //user permission
        $user_create = Permission::create(['name' => 'user.create']);
        $user_edit = Permission::create(['name' => 'user.edit']);
        $user_delete = Permission::create(['name' => 'user.delete']);
        $user_index = Permission::create(['name' => 'user.index']);

        //product permission
        $product_create = Permission::create(['name' => 'product.create']);
        $product_edit = Permission::create(['name' => 'product.edit']);
        $product_delete = Permission::create(['name' => 'product.delete']);
        $product_index = Permission::create(['name' => 'product.index']);

        //order permission
        $order_create = Permission::create(['name' => 'order.create']);
        $order_edit = Permission::create(['name' => 'order.edit']);
        $order_delete = Permission::create(['name' => 'order.delete']);
        $order_index = Permission::create(['name' => 'order.index']);

        //factor permission
        $factor_create = Permission::create(['name' => 'factor.create']);
        $factor_edit = Permission::create(['name' => 'factor.edit']);
        $factor_delete = Permission::create(['name' => 'factor.delete']);
        $factor_index = Permission::create(['name' => 'factor.index']);

        //team permission
        $team_create = Permission::create(['name' => 'team.create']);
        $team_edit = Permission::create(['name' => 'team.edit']);
        $team_delete = Permission::create(['name' => 'team.delete']);
        $team_index = Permission::create(['name' => 'team.index']);

        //task permission
        $task_create = Permission::create(['name' => 'task.create']);
        $task_edit = Permission::create(['name' => 'task.edit']);
        $task_delete = Permission::create(['name' => 'task.delete']);
        $task_index = Permission::create(['name' => 'task.index']);

        //note permission
        $note_create = Permission::create(['name' => 'note.create']);
        $note_edit = Permission::create(['name' => 'note.edit']);
        $note_delete = Permission::create(['name' => 'note.delete']);
        $note_index = Permission::create(['name' => 'note.index']);

        //ticket permission
        $ticket_create = Permission::create(['name' => 'ticket.create']);
        $ticket_edit = Permission::create(['name' => 'ticket.edit']);
        $ticket_delete = Permission::create(['name' => 'ticket.delete']);
        $ticket_index = Permission::create(['name' => 'ticket.index']);

        //massage permission
        $massage_create = Permission::create(['name' => 'massage.create']);
        $massage_edit = Permission::create(['name' => 'massage.edit']);
        $massage_delete = Permission::create(['name' => 'massage.delete']);
        $massage_index = Permission::create(['name' => 'massage.index']);

        //warrenty permission
        $warrenty_create = Permission::create(['name' => 'warrenty.create']);
        $warrenty_edit = Permission::create(['name' => 'warrenty.edit']);
        $warrenty_delete = Permission::create(['name' => 'warrenty.delete']);
        $warrenty_index = Permission::create(['name' => 'warrenty.index']);

        //label permission
        $label_create = Permission::create(['name' => 'label.create']);
        $label_edit = Permission::create(['name' => 'label.edit']);
        $label_delete = Permission::create(['name' => 'label.delete']);
        $label_index = Permission::create(['name' => 'label.index']);

        // $super_admin->syncPermissions((Permission::all()));
        // $admin->syncPermissions([
        //     "user.index", "user.create", "user.delete",
        //     "user.edit", "order.create", "order.edit",
        // ]);
        // $user->syncPermissions([
        //     "user.index", "user.delete", "user.edit",
        //     "order.create", "order.edit", ".me",
        // ]);
        // $reseller->syncPermissions([
        //     "user.index", "product.index", "product.create", "product.delete",
        //     "product.edit", "order.index",
        // ]);
        // $customer->syncPermissions(["product.index", "user.create"]);

    }
}
