<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_types')->insert([
            [
                'role' => 'Master',
                'slug' => 'master',
                'description' => 'Usuario Maestro de la app',
                'permissions' => json_encode([
                    'users' => true,
                    'create_user' => true,
                    'read_user' => true,
                    'update_user' => true,
                    'delete_user' => true,
                    'clients' => true,
                    'create_client' => true,
                    'read_client' => true,
                    'update_client' => true,
                    'quotes' => true,
                    'create_quote' => true,
                    'read_quote' => true,
                    'update_quote' => true,
                    'delete_quote' => true,
                    'sales' => true,
                    'create_sale' => true,
                    'read_sale' => true,
                    'update_sale' => true,
                    'authorize_sale' => true,
                    'delete_sale' => true,
                    'support_requests' => true,
                    'create_support_request' => true,
                    'read_support_request' => true,
                    'update_support_request' => true,
                    'delete_support_request' => true,
                    'support_quotes' => true,
                    'create_support_quote' => true,
                    'read_support_quote' => true,
                    'update_support_quote' => true,
                    'delete_support_quote' => true,
                    'support' => true,
                    'create_support' => true,
                    'read_support' => true,
                    'update_support' => true,
                    'delete_support' => true,
                    'shipping' => true,
                    'create_shipping' => true,
                    'read_shipping' => true,
                    'update_shipping' => true,
                    'delete_shipping' => true,
                    'inventory' => true,
                    'create_inventory' => true,
                    'read_inventory' => true,
                    'update_inventory' => true,
                    'delete_inventory' => true,
                    'services' => true,
                    'create_service' => true,
                    'read_service' => true,
                    'update_service' => true,
                    'delete_service' => true,
                    'warranty' => true,
                    'create_warranty' => true,
                    'read_warranty' => true,
                    'update_warranty' => true,
                    'delete_warranty' => true,
                    'spares' => true,
                    'create_spare' => true,
                    'read_spare' => true,
                    'update_spare' => true,
                    'delete_spare' => true
                ])
            ],
            [
                'role' => 'Director General',
                'slug' => 'ceo',
                'description' => 'Director General de la empresa',
                'permissions' => json_encode([
                    'users' => true,
                    'create_user' => true,
                    'read_user' => true,
                    'update_user' => true,
                    'delete_user' => true,
                    'clients' => true,
                    'create_client' => true,
                    'read_client' => true,
                    'update_client' => true,
                    'quotes' => true,
                    'create_quote' => true,
                    'read_quote' => true,
                    'update_quote' => true,
                    'delete_quote' => true,
                    'sales' => true,
                    'create_sale' => true,
                    'read_sale' => true,
                    'update_sale' => true,
                    'authorize_sale' => true,
                    'delete_sale' => true,
                    'support_requests' => true,
                    'create_support_request' => true,
                    'read_support_request' => true,
                    'update_support_request' => true,
                    'delete_support_request' => true,
                    'support_quotes' => true,
                    'create_support_quote' => true,
                    'read_support_quote' => true,
                    'update_support_quote' => true,
                    'delete_support_quote' => true,
                    'support_requests' => true,
                    'create_support_request' => true,
                    'read_support_request' => true,
                    'update_support_request' => true,
                    'delete_support_request' => true,
                    'support' => true,
                    'create_support' => true,
                    'read_support' => true,
                    'update_support' => true,
                    'delete_support' => true,
                    'shipping' => true,
                    'create_shipping' => true,
                    'read_shipping' => true,
                    'update_shipping' => true,
                    'delete_shipping' => true,
                    'inventory' => true,
                    'create_inventory' => true,
                    'read_inventory' => true,
                    'update_inventory' => true,
                    'delete_inventory' => true,
                    'services' => true,
                    'create_service' => true,
                    'read_service' => true,
                    'update_service' => true,
                    'delete_service' => true,
                    'warranty' => true,
                    'create_warranty' => true,
                    'read_warranty' => true,
                    'update_warranty' => true,
                    'delete_warranty' => true,
                    'spares' => true,
                    'create_spare' => true,
                    'read_spare' => true,
                    'update_spare' => true,
                    'delete_spare' => true
                ])
            ],
            [
                'role' => 'Gerente General',
                'slug' => 'manager',
                'description' => 'Gerente General del PDV',
                'permissions' => json_encode([
                    'users' => true,
                    'create_user' => true,
                    'read_user' => true,
                    'update_user' => true,
                    'delete_user' => true,
                    'clients' => true,
                    'create_client' => true,
                    'read_client' => true,
                    'update_client' => true,
                    'quotes' => true,
                    'create_quote' => true,
                    'read_quote' => true,
                    'update_quote' => true,
                    'delete_quote' => true,
                    'sales' => true,
                    'create_sale' => true,
                    'read_sale' => true,
                    'update_sale' => true,
                    'authorize_sale' => true,
                    'delete_sale' => true,
                    'support_requests' => true,
                    'create_support_request' => true,
                    'read_support_request' => true,
                    'update_support_request' => true,
                    'delete_support_request' => true,
                    'support_quotes' => true,
                    'create_support_quote' => true,
                    'read_support_quote' => true,
                    'update_support_quote' => true,
                    'delete_support_quote' => true,
                    'support' => true,
                    'create_support' => true,
                    'read_support' => true,
                    'update_support' => true,
                    'delete_support' => true,
                    'shipping' => true,
                    'create_shipping' => true,
                    'read_shipping' => true,
                    'update_shipping' => true,
                    'delete_shipping' => true,
                    'inventory' => true,
                    'create_inventory' => true,
                    'read_inventory' => true,
                    'update_inventory' => true,
                    'delete_inventory' => true,
                    'services' => true,
                    'create_service' => true,
                    'read_service' => true,
                    'update_service' => true,
                    'delete_service' => true,
                    'warranty' => true,
                    'create_warranty' => true,
                    'read_warranty' => true,
                    'update_warranty' => true,
                    'delete_warranty' => true,
                    'spares' => true,
                    'create_spare' => true,
                    'read_spare' => true,
                    'update_spare' => true,
                    'delete_spare' => true
                ])
            ],
            [
                'role' => 'Gerente de Sucursal',
                'slug' => 'sub_manager',
                'description' => 'Gerente/Encargado de sucursal',
                'permissions' => json_encode([
                    'users' => true,
                    'create_user' => true,
                    'read_user' => true,
                    'update_user' => true,
                    'delete_user' => true,
                    'clients' => true,
                    'create_client' => true,
                    'read_client' => true,
                    'update_client' => true,
                    'quotes' => true,
                    'create_quote' => true,
                    'read_quote' => true,
                    'update_quote' => true,
                    'delete_quote' => true,
                    'sales' => true,
                    'create_sale' => true,
                    'read_sale' => true,
                    'update_sale' => true,
                    'authorize_sale' => true,
                    'delete_sale' => true,
                    'support_requests' => true,
                    'create_support_request' => true,
                    'read_support_request' => true,
                    'update_support_request' => true,
                    'delete_support_request' => true,
                    'support_quotes' => true,
                    'create_support_quote' => true,
                    'read_support_quote' => true,
                    'update_support_quote' => true,
                    'delete_support_quote' => true,
                    'support' => true,
                    'create_support' => true,
                    'read_support' => true,
                    'update_support' => true,
                    'delete_support' => true,
                    'shipping' => true,
                    'create_shipping' => true,
                    'read_shipping' => true,
                    'update_shipping' => true,
                    'delete_shipping' => true,
                    'inventory' => true,
                    'create_inventory' => true,
                    'read_inventory' => true,
                    'update_inventory' => true,
                    'delete_inventory' => true,
                    'services' => true,
                    'create_service' => true,
                    'read_service' => true,
                    'update_service' => true,
                    'delete_service' => true,
                    'warranty' => true,
                    'create_warranty' => true,
                    'read_warranty' => true,
                    'update_warranty' => true,
                    'delete_warranty' => true,
                    'spares' => true,
                    'create_spare' => true,
                    'read_spare' => true,
                    'update_spare' => true,
                    'delete_spare' => true
                ])
            ],
            [
                'role' => 'Vendedor/a',
                'slug' => 'seller',
                'description' => 'Vendedor/a de Punto de Venta',
                'permissions' => json_encode([
                    'users' => false,
                    'create_user' => false,
                    'read_user' => false,
                    'update_user' => false,
                    'delete_user' => false,
                    'clients' => true,
                    'create_client' => true,
                    'read_client' => true,
                    'update_client' => true,
                    'quotes' => true,
                    'create_quote' => true,
                    'read_quote' => true,
                    'update_quote' => true,
                    'delete_quote' => true,
                    'sales' => true,
                    'create_sale' => true,
                    'read_sale' => true,
                    'update_sale' => true,
                    'authorize_sale' => false,
                    'delete_sale' => true,
                    'support_requests' => false,
                    'create_support_request' => false,
                    'read_support_request' => false,
                    'update_support_request' => false,
                    'delete_support_request' => false,
                    'support_quotes' => false,
                    'create_support_quote' => false,
                    'read_support_quote' => false,
                    'update_support_quote' => false,
                    'delete_support_quote' => false,
                    'support' => false,
                    'create_support' => false,
                    'read_support' => false,
                    'update_support' => false,
                    'delete_support' => false,
                    'shipping' => true,
                    'create_shipping' => false,
                    'read_shipping' => true,
                    'update_shipping' => true,
                    'delete_shipping' => false,
                    'inventory' => true,
                    'create_inventory' => false,
                    'read_inventory' => true,
                    'update_inventory' => false,
                    'delete_inventory' => false,
                    'services' => false,
                    'create_service' => false,
                    'read_service' => false,
                    'update_service' => false,
                    'delete_service' => false,
                    'warranty' => true,
                    'create_warranty' => false,
                    'read_warranty' => true,
                    'update_warranty' => true,
                    'delete_warranty' => false,
                    'spares' => false,
                    'create_spare' => false,
                    'read_spare' => false,
                    'update_spare' => false,
                    'delete_spare' => false
                ])
            ],
            [
                'role' => 'Lider de PDV',
                'slug' => 'pdv_lider',
                'description' => 'Encargado de Piso de Ventas en PDV',
                'permissions' => json_encode([
                    'users' => false,
                    'create_user' => false,
                    'read_user' => false,
                    'update_user' => false,
                    'delete_user' => false,
                    'clients' => true,
                    'create_client' => true,
                    'read_client' => true,
                    'update_client' => true,
                    'quotes' => true,
                    'create_quote' => true,
                    'read_quote' => true,
                    'update_quote' => true,
                    'delete_quote' => true,
                    'sales' => true,
                    'support_requests' => false,
                    'create_support_request' => false,
                    'read_support_request' => false,
                    'update_support_request' => false,
                    'delete_support_request' => false,
                    'create_sale' => true,
                    'read_sale' => true,
                    'update_sale' => true,
                    'authorize_sale' => true,
                    'delete_sale' => true,
                    'support_quotes' => false,
                    'create_support_quote' => false,
                    'read_support_quote' => false,
                    'update_support_quote' => false,
                    'delete_support_quote' => false,
                    'support' => false,
                    'create_support' => false,
                    'read_support' => false,
                    'update_support' => false,
                    'delete_support' => false,
                    'shipping' => true,
                    'create_shipping' => false,
                    'read_shipping' => true,
                    'update_shipping' => true,
                    'delete_shipping' => false,
                    'inventory' => true,
                    'create_inventory' => false,
                    'read_inventory' => true,
                    'update_inventory' => false,
                    'delete_inventory' => false,
                    'services' => false,
                    'create_service' => false,
                    'read_service' => false,
                    'update_service' => false,
                    'delete_service' => false,
                    'warranty' => true,
                    'create_warranty' => false,
                    'read_warranty' => true,
                    'update_warranty' => true,
                    'delete_warranty' => false,
                    'spares' => false,
                    'create_spare' => false,
                    'read_spare' => false,
                    'update_spare' => false,
                    'delete_spare' => false
                ])
            ],
            [
                'role' => 'Asistente de Direcion',
                'slug' => 'assitant',
                'description' => 'Asistente de Director General',
                'permissions' => json_encode([
                    'users' => true,
                    'create_user' => true,
                    'read_user' => true,
                    'update_user' => true,
                    'delete_user' => true,
                    'clients' => true,
                    'create_client' => true,
                    'read_client' => true,
                    'update_client' => true,
                    'quotes' => true,
                    'create_quote' => true,
                    'read_quote' => true,
                    'update_quote' => true,
                    'delete_quote' => true,
                    'sales' => true,
                    'create_sale' => true,
                    'read_sale' => true,
                    'update_sale' => true,
                    'authorize_sale' => true,
                    'delete_sale' => true,
                    'support_requests' => true,
                    'create_support_request' => true,
                    'read_support_request' => true,
                    'update_support_request' => true,
                    'delete_support_request' => true,
                    'support_quotes' => true,
                    'create_support_quote' => true,
                    'read_support_quote' => true,
                    'update_support_quote' => true,
                    'delete_support_quote' => true,
                    'support' => true,
                    'create_support' => true,
                    'read_support' => true,
                    'update_support' => true,
                    'delete_support' => true,
                    'shipping' => true,
                    'create_shipping' => true,
                    'read_shipping' => true,
                    'update_shipping' => true,
                    'delete_shipping' => true,
                    'inventory' => true,
                    'create_inventory' => true,
                    'read_inventory' => true,
                    'update_inventory' => true,
                    'delete_inventory' => true,
                    'services' => true,
                    'create_service' => true,
                    'read_service' => true,
                    'update_service' => true,
                    'delete_service' => true,
                    'warranty' => true,
                    'create_warranty' => true,
                    'read_warranty' => true,
                    'update_warranty' => true,
                    'delete_warranty' => true,
                    'spares' => true,
                    'create_spare' => true,
                    'read_spare' => true,
                    'update_spare' => true,
                    'delete_spare' => true
                ])
            ],
            [
                'role' => 'Contador/a',
                'slug' => 'accountant',
                'description' => 'Contador/a del Grupo Empresarial',
                'permissions' => json_encode([
                    'users' => false,
                    'create_user' => false,
                    'read_user' => false,
                    'update_user' => false,
                    'delete_user' => false,
                    'clients' => true,
                    'create_client' => false,
                    'read_client' => true,
                    'update_client' => false,
                    'quotes' => false,
                    'create_quote' => false,
                    'read_quote' => false,
                    'update_quote' => false,
                    'delete_quote' => false,
                    'sales' => true,
                    'create_sale' => false,
                    'read_sale' => true,
                    'update_sale' => true,
                    'authorize_sale' => false,
                    'delete_sale' => false,
                    'support_requests' => false,
                    'create_support_request' => false,
                    'read_support_request' => false,
                    'update_support_request' => false,
                    'delete_support_request' => false,
                    'support_quotes' => false,
                    'create_support_quote' => false,
                    'read_support_quote' => false,
                    'update_support_quote' => false,
                    'delete_support_quote' => false,
                    'support' => true,
                    'create_support' => false,
                    'read_support' => true,
                    'update_support' => true,
                    'delete_support' => false,
                    'shipping' => false,
                    'create_shipping' => false,
                    'read_shipping' => false,
                    'update_shipping' => false,
                    'delete_shipping' => false,
                    'inventory' => true,
                    'create_inventory' => true,
                    'read_inventory' => true,
                    'update_inventory' => true,
                    'delete_inventory' => true,
                    'services' => true,
                    'create_service' => true,
                    'read_service' => true,
                    'update_service' => true,
                    'delete_service' => true,
                    'warranty' => false,
                    'create_warranty' => false,
                    'read_warranty' => false,
                    'update_warranty' => false,
                    'delete_warranty' => false,
                    'spares' => true,
                    'create_spare' => true,
                    'read_spare' => true,
                    'update_spare' => true,
                    'delete_spare' => true
                ])
            ],
            [
                'role' => 'Tecnico/a',
                'slug' => 'repair',
                'description' => 'Tecnio de Servicio Tecnico',
                'permissions' => json_encode([
                    'users' => false,
                    'create_user' => false,
                    'read_user' => false,
                    'update_user' => false,
                    'delete_user' => false,
                    'clients' => true,
                    'create_client' => true,
                    'read_client' => true,
                    'update_client' => true,
                    'quotes' => false,
                    'create_quote' => false,
                    'read_quote' => false,
                    'update_quote' => false,
                    'delete_quote' => false,
                    'sales' => true,
                    'create_sale' => false,
                    'read_sale' => true,
                    'update_sale' => false,
                    'authorize_sale' => true,
                    'delete_sale' => false,
                    'support_requests' => true,
                    'create_support_request' => true,
                    'read_support_request' => true,
                    'update_support_request' => true,
                    'delete_support_request' => true,
                    'support_quotes' => true,
                    'create_support_quote' => true,
                    'read_support_quote' => true,
                    'update_support_quote' => true,
                    'delete_support_quote' => true,
                    'support' => true,
                    'create_support' => true,
                    'read_support' => true,
                    'update_support' => true,
                    'delete_support' => true,
                    'shipping' => true,
                    'create_shipping' => true,
                    'read_shipping' => true,
                    'update_shipping' => true,
                    'delete_shipping' => true,
                    'inventory' => true,
                    'create_inventory' => true,
                    'read_inventory' => true,
                    'update_inventory' => true,
                    'delete_inventory' => true,
                    'services' => true,
                    'create_service' => true,
                    'read_service' => true,
                    'update_service' => true,
                    'delete_service' => true,
                    'warranty' => true,
                    'create_warranty' => true,
                    'read_warranty' => true,
                    'update_warranty' => true,
                    'delete_warranty' => true,
                    'spares' => true,
                    'create_spare' => true,
                    'read_spare' => true,
                    'update_spare' => true,
                    'delete_spare' => true
                ])
            ],
            [
                'role' => 'Almacenista',
                'slug' => 'warehouse',
                'description' => 'Trabajador de Almacen & Envios',
                'permissions' => json_encode([
                    'users' => false,
                    'create_user' => false,
                    'read_user' => false,
                    'update_user' => false,
                    'delete_user' => false,
                    'clients' => false,
                    'create_client' => false,
                    'read_client' => false,
                    'update_client' => false,
                    'quotes' => false,
                    'create_quote' => false,
                    'read_quote' => false,
                    'update_quote' => false,
                    'delete_quote' => false,
                    'sales' => true,
                    'create_sale' => false,
                    'read_sale' => true,
                    'update_sale' => true,
                    'authorize_sale' => false,
                    'delete_sale' => false,
                    'support_requests' => false,
                    'create_support_request' => false,
                    'read_support_request' => false,
                    'update_support_request' => false,
                    'delete_support_request' => false,
                    'support_quotes' => false,
                    'create_support_quote' => false,
                    'read_support_quote' => false,
                    'update_support_quote' => false,
                    'delete_support_quote' => false,
                    'support' => false,
                    'create_support' => false,
                    'read_support' => false,
                    'update_support' => false,
                    'delete_support' => false,
                    'shipping' => true,
                    'create_shipping' => true,
                    'read_shipping' => true,
                    'update_shipping' => true,
                    'delete_shipping' => true,
                    'inventory' => true,
                    'create_inventory' => true,
                    'read_inventory' => true,
                    'update_inventory' => true,
                    'delete_inventory' => true,
                    'services' => true,
                    'create_service' => true,
                    'read_service' => true,
                    'update_service' => true,
                    'delete_service' => true,
                    'warranty' => true,
                    'create_warranty' => true,
                    'read_warranty' => true,
                    'update_warranty' => true,
                    'delete_warranty' => true,
                    'spares' => true,
                    'create_spare' => true,
                    'read_spare' => true,
                    'update_spare' => true,
                    'delete_spare' => true
                ])
            ]
        ]);
    }
}
