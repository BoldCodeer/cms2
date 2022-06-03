<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Tailwind CSS Sidebar UI </title>
        <script src="https://cdn.tailwindcss.com/"></script>
    </head>
    <body>
    <div class="flex">
        <div class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto border-r">

            <div class="flex flex-col justify-between mt-6">
                    <aside>
                        <ul>
                            <li>
                                <a class="flex items-center px-4 py-2 text-gray-700 bg-gray-100 rounded-md " href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>

                                    <span class="mx-4 font-medium">Dashboard</span>
                                </a>
                            </li>


                            <li>
                                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="/group">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M21.698 10.658l2.302 1.342-12.002 7-11.998-7 2.301-1.342 9.697 5.658 9.7-5.658zm-9.7 10.657l-9.697-5.658-2.301 1.343 11.998 7 12.002-7-2.302-1.342-9.7 5.657zm0-19l8.032 4.685-8.032 4.685-8.029-4.685 8.029-4.685zm0-2.315l-11.998 7 11.998 7 12.002-7-12.002-7z"/></svg>

                                    <span class="mx-4 font-medium">Group</span>
                                </a>
                            </li>

                            <li>
                                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>

                                    <span class="mx-4 font-medium">Settings</span>
                                </a>
                            </li>
                        </ul>

                    </aside>


            </div>
        </div>
        <div class="w-full h-full p-4 m-8 overflow-y-auto">
            <div style="width: 170px; height: 180px; background-color: gold; text-align: center; padding-top: 10px; display: inline-block; border-radius: 5px; margin: 8px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="60" viewBox="0 0 24 24"><path d="M19 7.001c0 3.865-3.134 7-7 7s-7-3.135-7-7c0-3.867 3.134-7.001 7-7.001s7 3.134 7 7.001zm-1.598 7.18c-1.506 1.137-3.374 1.82-5.402 1.82-2.03 0-3.899-.685-5.407-1.822-4.072 1.793-6.593 7.376-6.593 9.821h24c0-2.423-2.6-8.006-6.598-9.819z"/></svg>
                <b style="font-size: 40px;text-shadow: 2px 2px 4px #000000; color: white">100</b><br>
                Student
            </div>
            <div style="width: 170px; height: 180px; background-color: mediumseagreen; text-align: center; padding-top: 10px; display: inline-block; border-radius: 5px; margin: 8px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="60" viewBox="0 0 24 24"><path d="M19 7.001c0 3.865-3.134 7-7 7s-7-3.135-7-7c0-3.867 3.134-7.001 7-7.001s7 3.134 7 7.001zm-1.598 7.18c-1.506 1.137-3.374 1.82-5.402 1.82-2.03 0-3.899-.685-5.407-1.822-4.072 1.793-6.593 7.376-6.593 9.821h24c0-2.423-2.6-8.006-6.598-9.819z"/></svg>
                <b style="font-size: 40px;text-shadow: 2px 2px 4px #000000; color: white">200</b><br>
                Panel
            </div>
            <div style="width: 170px; height: 180px; background-color: #2563eb; text-align: center; padding-top: 10px; display: inline-block; border-radius: 5px; margin: 8px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="60" viewBox="0 0 24 24"><path d="M21.698 10.658l2.302 1.342-12.002 7-11.998-7 2.301-1.342 9.697 5.658 9.7-5.658zm-9.7 10.657l-9.697-5.658-2.301 1.343 11.998 7 12.002-7-2.302-1.342-9.7 5.657zm12.002-14.315l-12.002-7-11.998 7 11.998 7 12.002-7z"/></svg>
                <b style="font-size: 40px;text-shadow: 2px 2px 4px #000000; color: white">50</b><br>
                Group
            </div>
            <div style="width: 170px; height: 180px; background-color: hotpink; text-align: center; padding-top: 10px; display: inline-block; border-radius: 5px; margin: 8px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="60" viewBox="0 0 24 24"><path d="M14.568.075c2.202 1.174 5.938 4.883 7.432 6.881-1.286-.9-4.044-1.657-6.091-1.179.222-1.468-.185-4.534-1.341-5.702zm-.824 7.925s1.522-8-3.335-8h-8.409v24h20v-13c0-3.419-5.247-3.745-8.256-3z"/></svg>
                <b style="font-size: 40px;text-shadow: 2px 2px 4px #000000; color: white">300</b><br>
                File Submission
            </div>
            <div style="width: 170px; height: 180px; background-color: firebrick; text-align: center; padding-top: 10px; display: inline-block; border-radius: 5px; margin: 8px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="60" viewBox="0 0 24 24"><path d="M14.568.075c2.202 1.174 5.938 4.883 7.432 6.881-1.286-.9-4.044-1.657-6.091-1.179.222-1.468-.185-4.534-1.341-5.702zm-.824 7.925s1.522-8-3.335-8h-8.409v24h20v-13c0-3.419-5.247-3.745-8.256-3z"/></svg>
                <b style="font-size: 40px;text-shadow: 2px 2px 4px #000000; color: white">140</b><br>
                Task
            </div>
        </div>
    </body>
    </html>
</x-app-layout>
