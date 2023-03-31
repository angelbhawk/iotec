<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Panel de sensores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <style>
                        table {
                          border-collapse: collapse;
                          width: 100%;
                          color: #fff;
                          background-color: #273746;
                        }
                        
                        th, td {
                          text-align: left;
                          padding: 8px;
                        }
                        
                        th {
                          background-color: #34495E;
                          color: white;
                        }
                        
                        tr:nth-child(even) {
                          background-color: #2E4053;
                        }
                        
                        tr:hover {
                          background-color: #1e88e5;
                        }
                      </style>
                      
                      <table>
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Application</th>
                            <th>Device</th>
                            <th>Type</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>My App</td>
                            <td>iPhone</td>
                            <td>Mobile</td>
                            <td>2023-03-29 10:30:00</td>
                            <td>2023-03-30 14:45:00</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>My App</td>
                            <td>iPad</td>
                            <td>Tablet</td>
                            <td>2023-03-28 13:45:00</td>
                            <td>2023-03-30 14:45:00</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>My App</td>
                            <td>MacBook Pro</td>
                            <td>Laptop</td>
                            <td>2023-03-26 08:15:00</td>
                            <td>2023-03-30 14:45:00</td>
                          </tr>
                          <td>4</td>
      <td>My App</td>
      <td>Galaxy S20</td>
      <td>Mobile</td>
      <td>2023-03-25 16:20:00</td>
      <td>2023-03-30 14:45:00</td>
    </tr>
    <tr>
      <td>5</td>
      <td>My App</td>
      <td>iMac</td>
      <td>Desktop</td>
      <td>2023-03-23 09:10:00</td>
      <td>2023-03-30 14:45:00</td>
    </tr>
    <tr>
      <td>6</td>
      <td>My App</td>
      <td>Pixel 6</td>
      <td>Mobile</td>
      <td>2023-03-22 11:45:00</td>
      <td>2023-03-30 14:45:00</td>
    </tr>
    <tr>
      <td>7</td>
      <td>My App</td>
      <td>Mac Mini</td>
      <td>Desktop</td>
      <td>2023-03-20 17:35:00</td>
      <td>2023-03-30 14:45:00</td>
    </tr>
                        </tbody>
                      </table>
                      
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
