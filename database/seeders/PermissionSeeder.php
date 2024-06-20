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
        $super_admin = Role::create(['name' => 'super.admin']);
        // $super_admin = Permission::create(['name' => 'super_admin']);
        $user = Role::create(['name' => 'user']);
        $reseller = Role::create(['name' => 'reseller']);
        $customer = Role::create(['name' => 'customer']);

        //me permission
        // $me = Permission::store(['name' => 'me']);

        //user permission
        $user_store = Permission::create(['name' => 'user.store']);
        $user_edit = Permission::create(['name' => 'user.edit']);
        $user_delete = Permission::create(['name' => 'user.delete']);
        $user_index = Permission::create(['name' => 'user.index']);

        //product permission
        $product_store = Permission::create(['name' => 'product.store']);
        $product_edit = Permission::create(['name' => 'product.edit']);
        $product_delete = Permission::create(['name' => 'product.delete']);
        $product_index = Permission::create(['name' => 'product.index']);

        //order permission
        $order_store = Permission::create(['name' => 'order.store']);
        $order_edit = Permission::create(['name' => 'order.edit']);
        $order_delete = Permission::create(['name' => 'order.delete']);
        $order_index = Permission::create(['name' => 'order.index']);

        //factor permission
        $factor_store = Permission::create(['name' => 'factor.store']);
        $factor_edit = Permission::create(['name' => 'factor.edit']);
        $factor_delete = Permission::create(['name' => 'factor.delete']);
        $factor_index = Permission::create(['name' => 'factor.index']);

        //team permission
        $team_store = Permission::create(['name' => 'team.store']);
        $team_edit = Permission::create(['name' => 'team.edit']);
        $team_delete = Permission::create(['name' => 'team.delete']);
        $team_index = Permission::create(['name' => 'team.index']);

        //task permission
        $task_store = Permission::create(['name' => 'task.store']);
        $task_edit = Permission::create(['name' => 'task.edit']);
        $task_delete = Permission::create(['name' => 'task.delete']);
        $task_index = Permission::create(['name' => 'task.index']);

        //note permission
        $note_store = Permission::create(['name' => 'note.store']);
        $note_edit = Permission::create(['name' => 'note.edit']);
        $note_delete = Permission::create(['name' => 'note.delete']);
        $note_index = Permission::create(['name' => 'note.index']);

        //ticket permission
        $ticket_store = Permission::create(['name' => 'ticket.store']);
        $ticket_edit = Permission::create(['name' => 'ticket.edit']);
        $ticket_delete = Permission::create(['name' => 'ticket.delete']);
        $ticket_index = Permission::create(['name' => 'ticket.index']);

        //massage permission
        $massage_store = Permission::create(['name' => 'massage.store']);
        $massage_edit = Permission::create(['name' => 'massage.edit']);
        $massage_delete = Permission::create(['name' => 'massage.delete']);
        $massage_index = Permission::create(['name' => 'massage.index']);

        //warrenty permission
        $warrenty_store = Permission::create(['name' => 'warrenty.store']);
        $warrenty_edit = Permission::create(['name' => 'warrenty.edit']);
        $warrenty_delete = Permission::create(['name' => 'warrenty.delete']);
        $warrenty_index = Permission::create(['name' => 'warrenty.index']);

        //label permission
        $label_store = Permission::create(['name' => 'label.store']);
        $label_edit = Permission::create(['name' => 'label.edit']);
        $label_delete = Permission::create(['name' => 'label.delete']);
        $label_index = Permission::create(['name' => 'label.index']);

        // $super_admin->syncPermissions((Permission::all()));
        $super_admin->syncPermissions(Permission::all());
        $admin->syncPermissions([
            "user.index", "user.store","user.edit",
             "order.store", "order.edit",
            "order.delete", "order.index", "product"
        ]);
        // $user->syncPermissions([
        //     "product.index", "order.delete",
        //     "product.store", "order.store", "order.edit",
        //     "team.store", "team.index", "task.index", "note.store",
        //     "massage.store", "massage.edit", "massage.delete", "warrenty.index",
        //     "label.index", "label.store"
        // ]);
        // $reseller->syncPermissions([
        //     "user.index", "product.index", "product.store", "product.delete",
        //     "product.edit", "order.index",
        // ]);
        // $customer->syncPermissions(["product.index", "user.store"]);

    }
}
