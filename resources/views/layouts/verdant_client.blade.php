<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/verdant_assets/img/varst-icon.png">
    <title>Verdant Dashboard</title>
    <!-- Bootstrap Css -->
    <link href="/verdant_assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/verdant_assets/css/materialsTemplate.css" rel="stylesheet" type="text/css" />
    <link href="/verdant_assets/css/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="/verdant_assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="/verdant_assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/verdant_assets/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<style>
    .modal-header,.close {
        background-color: #ef6c25;
        color:white !important;
        text-align: center;
        font-size: 30px;
    }
    .modal-footer {
        background-color: #f9f9f9;
    }
</style>
@include('sweetalert::alert')
<div class="gridContainer">
    <section class="sideBarNavContainer">
        <div class="materialCard">
            <div class="sideBarNavHeader twoItemsPerRow">
                <div>
                    <img src="/verdant_assets/img/varst-logo-1.png" alt="">
                </div>
                <div class="closeBtn showOnTablet showOnMobile">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.46967 3.46967C3.76256 3.17678 4.23744 3.17678 4.53033 3.46967L20.5303 19.4697C20.8232 19.7626 20.8232 20.2374 20.5303 20.5303C20.2374 20.8232 19.7626 20.8232 19.4697 20.5303L3.46967 4.53033C3.17678 4.23744 3.17678 3.76256 3.46967 3.46967Z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M20.5303 3.46967C20.8232 3.76256 20.8232 4.23744 20.5303 4.53033L4.53033 20.5303C4.23744 20.8232 3.76256 20.8232 3.46967 20.5303C3.17678 20.2374 3.17678 19.7626 3.46967 19.4697L19.4697 3.46967C19.7626 3.17678 20.2374 3.17678 20.5303 3.46967Z"></path></svg>
                </div>
            </div>
            <ul>
                <li class="{{  request()->routeIs('dashboard') ? 'active' : '' }}">
                    <a href="{{route('dashboard')}}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 16.5H11C10.17 16.5 9.5 17.17 9.5 18V21.5H14.5V18C14.5 17.17 13.83 16.5 13 16.5Z" stroke-miterlimit="10" stroke-linejoin="round"/><path d="M10.0698 2.81997L3.13978 8.36997C2.35978 8.98997 1.85978 10.3 2.02978 11.28L3.35978 19.24C3.59978 20.66 4.95978 21.81 6.39978 21.81H17.5998C19.0298 21.81 20.3998 20.65 20.6398 19.24L21.9698 11.28C22.1298 10.3 21.6298 8.98997 20.8598 8.36997L13.9298 2.82997C12.8598 1.96997 11.1298 1.96997 10.0698 2.81997Z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span>Home</span>
                    </a>
                </li>
                <li class="{{  request()->routeIs('transactions') ? 'active' : '' }}">
                    <a href="{{route('transactions')}}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22 6V8.42C22 10 21 11 19.42 11H16V4.01C16 2.9 16.91 2 18.02 2C19.11 2.01 20.11 2.45 20.83 3.17C21.55 3.9 22 4.9 22 6Z" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 7V21C2 21.83 2.94 22.3 3.6 21.8L5.31 20.52C5.71 20.22 6.27 20.26 6.63 20.62L8.29 22.29C8.68 22.68 9.32 22.68 9.71 22.29L11.39 20.61C11.74 20.26 12.3 20.22 12.69 20.52L14.4 21.8C15.06 22.29 16 21.82 16 21V4C16 2.9 16.9 2 18 2H7H6C3 2 2 3.79 2 6V7Z" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M6.25 10H11.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span>Transactions</span>
                    </a>
                </li>
                <li class="{{  request()->routeIs('customers') ? 'active' : '' }}">
                    <a href="{{route('customers')}}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 7.16C17.94 7.15 17.87 7.15 17.81 7.16C16.43 7.11 15.33 5.98 15.33 4.58C15.33 3.15 16.48 2 17.91 2C19.34 2 20.49 3.16 20.49 4.58C20.48 5.98 19.38 7.11 18 7.16Z" stroke-linecap="round" stroke-linejoin="round"/><path d="M16.9699 14.44C18.3399 14.67 19.8499 14.43 20.9099 13.72C22.3199 12.78 22.3199 11.24 20.9099 10.3C19.8399 9.59004 18.3099 9.35003 16.9399 9.59003" stroke-linecap="round" stroke-linejoin="round"/><path d="M5.96998 7.16C6.02998 7.15 6.09998 7.15 6.15998 7.16C7.53998 7.11 8.63998 5.98 8.63998 4.58C8.63998 3.15 7.48998 2 6.05998 2C4.62998 2 3.47998 3.16 3.47998 4.58C3.48998 5.98 4.58998 7.11 5.96998 7.16Z" stroke-linecap="round" stroke-linejoin="round"/><path d="M6.99994 14.44C5.62994 14.67 4.11994 14.43 3.05994 13.72C1.64994 12.78 1.64994 11.24 3.05994 10.3C4.12994 9.59004 5.65994 9.35003 7.02994 9.59003" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 14.63C11.94 14.62 11.87 14.62 11.81 14.63C10.43 14.58 9.32996 13.45 9.32996 12.05C9.32996 10.62 10.48 9.46997 11.91 9.46997C13.34 9.46997 14.49 10.63 14.49 12.05C14.48 13.45 13.38 14.59 12 14.63Z" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.08997 17.78C7.67997 18.72 7.67997 20.26 9.08997 21.2C10.69 22.27 13.31 22.27 14.91 21.2C16.32 20.26 16.32 18.72 14.91 17.78C13.32 16.72 10.69 16.72 9.08997 17.78Z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span>Business</span>
                    </a>
                </li>
                <li class="{{  request()->routeIs('account') ? 'active' : '' }}">
                    <a href="{{route('account')}}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16006 10.87C9.06006 10.86 8.94006 10.86 8.83006 10.87C6.45006 10.79 4.56006 8.84 4.56006 6.44C4.56006 3.99 6.54006 2 9.00006 2C11.4501 2 13.4401 3.99 13.4401 6.44C13.4301 8.84 11.5401 10.79 9.16006 10.87Z" stroke-linecap="round" stroke-linejoin="round"/><path d="M16.41 4C18.35 4 19.91 5.57 19.91 7.5C19.91 9.39 18.41 10.93 16.54 11C16.46 10.99 16.37 10.99 16.28 11" stroke-linecap="round" stroke-linejoin="round"/><path d="M4.15997 14.56C1.73997 16.18 1.73997 18.82 4.15997 20.43C6.90997 22.27 11.42 22.27 14.17 20.43C16.59 18.81 16.59 16.17 14.17 14.56C11.43 12.73 6.91997 12.73 4.15997 14.56Z" stroke-linecap="round" stroke-linejoin="round"/><path d="M18.3401 20C19.0601 19.85 19.7401 19.56 20.3001 19.13C21.8601 17.96 21.8601 16.03 20.3001 14.86C19.7501 14.44 19.0801 14.16 18.3701 14" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span>Accounts</span>
                    </a>
                </li>

                <li class="{{  request()->routeIs('createAgent') ? 'active' : '' }}">
                    <a href="{{route('createAgent')}}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16006 10.87C9.06006 10.86 8.94006 10.86 8.83006 10.87C6.45006 10.79 4.56006 8.84 4.56006 6.44C4.56006 3.99 6.54006 2 9.00006 2C11.4501 2 13.4401 3.99 13.4401 6.44C13.4301 8.84 11.5401 10.79 9.16006 10.87Z" stroke-linecap="round" stroke-linejoin="round"/><path d="M16.41 4C18.35 4 19.91 5.57 19.91 7.5C19.91 9.39 18.41 10.93 16.54 11C16.46 10.99 16.37 10.99 16.28 11" stroke-linecap="round" stroke-linejoin="round"/><path d="M4.15997 14.56C1.73997 16.18 1.73997 18.82 4.15997 20.43C6.90997 22.27 11.42 22.27 14.17 20.43C16.59 18.81 16.59 16.17 14.17 14.56C11.43 12.73 6.91997 12.73 4.15997 14.56Z" stroke-linecap="round" stroke-linejoin="round"/><path d="M18.3401 20C19.0601 19.85 19.7401 19.56 20.3001 19.13C21.8601 17.96 21.8601 16.03 20.3001 14.86C19.7501 14.44 19.0801 14.16 18.3701 14" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span>Create Account</span>
                    </a>
                </li>

                <li class="{{  request()->routeIs('agent-transfer') ? 'active' : '' }}">
                    <a href="{{route('agent-transfer')}}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16006 10.87C9.06006 10.86 8.94006 10.86 8.83006 10.87C6.45006 10.79 4.56006 8.84 4.56006 6.44C4.56006 3.99 6.54006 2 9.00006 2C11.4501 2 13.4401 3.99 13.4401 6.44C13.4301 8.84 11.5401 10.79 9.16006 10.87Z" stroke-linecap="round" stroke-linejoin="round"/><path d="M16.41 4C18.35 4 19.91 5.57 19.91 7.5C19.91 9.39 18.41 10.93 16.54 11C16.46 10.99 16.37 10.99 16.28 11" stroke-linecap="round" stroke-linejoin="round"/><path d="M4.15997 14.56C1.73997 16.18 1.73997 18.82 4.15997 20.43C6.90997 22.27 11.42 22.27 14.17 20.43C16.59 18.81 16.59 16.17 14.17 14.56C11.43 12.73 6.91997 12.73 4.15997 14.56Z" stroke-linecap="round" stroke-linejoin="round"/><path d="M18.3401 20C19.0601 19.85 19.7401 19.56 20.3001 19.13C21.8601 17.96 21.8601 16.03 20.3001 14.86C19.7501 14.44 19.0801 14.16 18.3701 14" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span>Transfer To Agent</span>
                    </a>
                </li>

                <li class="{{  request()->routeIs('transfer') ? 'active' : '' }}">
                    <a href="{{route('transfer')}}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 18.86H17.24C16.44 18.86 15.68 19.17 15.12 19.73L13.41 21.42C12.63 22.19 11.36 22.19 10.58 21.42L8.87 19.73C8.31 19.17 7.54 18.86 6.75 18.86H6C4.34 18.86 3 17.53 3 15.89V4.97C3 3.33 4.34 2 6 2H18C19.66 2 21 3.33 21 4.97V15.88C21 17.52 19.66 18.86 18 18.86Z" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.0699 8.95005C12.0299 8.95005 11.9699 8.95005 11.9199 8.95005C10.8699 8.91005 10.0399 8.06005 10.0399 7.00005C10.0399 5.92005 10.9099 5.05005 11.9899 5.05005C13.0699 5.05005 13.9399 5.93005 13.9399 7.00005C13.9499 8.06005 13.1199 8.92005 12.0699 8.95005Z" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.24994 11.9601C7.91994 12.8501 7.91994 14.3001 9.24994 15.1901C10.7599 16.2001 13.2399 16.2001 14.7499 15.1901C16.0799 14.3001 16.0799 12.8501 14.7499 11.9601C13.2399 10.9601 10.7699 10.9601 9.24994 11.9601Z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span>Transfer Money</span>
                    </a>
                </li>
                <li class="{{  request()->routeIs('disbursement') ? 'active' : '' }}">
                    <a href="{{route('disbursement')}}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.3 7.91998V13.07C19.3 16.15 17.54 17.47 14.9 17.47H6.10995C5.65995 17.47 5.22996 17.43 4.82996 17.34C4.57996 17.3 4.33996 17.23 4.11996 17.15C2.61996 16.59 1.70996 15.29 1.70996 13.07V7.91998C1.70996 4.83998 3.46995 3.52002 6.10995 3.52002H14.9C17.14 3.52002 18.75 4.47001 19.18 6.64001C19.25 7.04001 19.3 7.44998 19.3 7.91998Z" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M22.3011 10.9201V16.0701C22.3011 19.1501 20.5411 20.4701 17.9011 20.4701H9.11105C8.37105 20.4701 7.70106 20.3701 7.12106 20.1501C5.93106 19.7101 5.12105 18.8001 4.83105 17.3401C5.23105 17.4301 5.66105 17.4701 6.11105 17.4701H14.9011C17.5411 17.4701 19.3011 16.1501 19.3011 13.0701V7.9201C19.3011 7.4501 19.2611 7.03014 19.1811 6.64014C21.0811 7.04014 22.3011 8.38011 22.3011 10.9201Z" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.4984 13.1399C11.9564 13.1399 13.1384 11.9579 13.1384 10.4999C13.1384 9.04185 11.9564 7.85986 10.4984 7.85986C9.04038 7.85986 7.8584 9.04185 7.8584 10.4999C7.8584 11.9579 9.04038 13.1399 10.4984 13.1399Z" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M4.78003 8.30005V12.7001" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M16.2217 8.30029V12.7003" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span>Disbursement</span>
                    </a>
                </li>
                <li class="{{  request()->routeIs('map_terminal') ? 'active' : '' }}">
                    <a href="{{route('map_terminal')}}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 5.56006H22" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.22 2H19.78C21.56 2 22 2.44 22 4.2V8.31C22 10.07 21.56 10.51 19.78 10.51H14.22C12.44 10.51 12 10.07 12 8.31V4.2C12 2.44 12.44 2 14.22 2Z" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2 17.0601H12" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.22 13.5H9.78C11.56 13.5 12 13.94 12 15.7V19.81C12 21.57 11.56 22.01 9.78 22.01H4.22C2.44 22.01 2 21.57 2 19.81V15.7C2 13.94 2.44 13.5 4.22 13.5Z" stroke-linecap="round" stroke-linejoin="round"></path><path d="M22 15C22 18.87 18.87 22 15 22L16.05 20.25" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2 9C2 5.13 5.13 2 9 2L7.95001 3.75" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <span>Map Terminal</span>
                    </a>
                </li>
                <li class="{{  request()->routeIs('services') ? 'active' : '' }}">
                    <a href="{{route('services')}}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 5.56006H22" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.22 2H19.78C21.56 2 22 2.44 22 4.2V8.31C22 10.07 21.56 10.51 19.78 10.51H14.22C12.44 10.51 12 10.07 12 8.31V4.2C12 2.44 12.44 2 14.22 2Z" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2 17.0601H12" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.22 13.5H9.78C11.56 13.5 12 13.94 12 15.7V19.81C12 21.57 11.56 22.01 9.78 22.01H4.22C2.44 22.01 2 21.57 2 19.81V15.7C2 13.94 2.44 13.5 4.22 13.5Z" stroke-linecap="round" stroke-linejoin="round"></path><path d="M22 15C22 18.87 18.87 22 15 22L16.05 20.25" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2 9C2 5.13 5.13 2 9 2L7.95001 3.75" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <span>Services</span>
                    </a>
                </li>

                <li class="{{  request()->routeIs('income') ? 'active' : '' }}">
                    <a href="{{route('income')}}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.67188 14.3298C8.67188 15.6198 9.66188 16.6598 10.8919 16.6598H13.4019C14.4719 16.6598 15.3419 15.7498 15.3419 14.6298C15.3419 13.4098 14.8119 12.9798 14.0219 12.6998L9.99187 11.2998C9.20187 11.0198 8.67188 10.5898 8.67188 9.36984C8.67188 8.24984 9.54187 7.33984 10.6119 7.33984H13.1219C14.3519 7.33984 15.3419 8.37984 15.3419 9.66984" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 6V18" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 22H9C4 22 2 20 2 15V9C2 4 4 2 9 2H15C20 2 22 4 22 9V15C22 20 20 22 15 22Z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span>Income</span>
                    </a>
                </li>


                <li class="{{  request()->routeIs('admins') ? 'active' : '' }}">
                    <a href="{{route('admins')}}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16006 10.87C9.06006 10.86 8.94006 10.86 8.83006 10.87C6.45006 10.79 4.56006 8.84 4.56006 6.44C4.56006 3.99 6.54006 2 9.00006 2C11.4501 2 13.4401 3.99 13.4401 6.44C13.4301 8.84 11.5401 10.79 9.16006 10.87Z" stroke-linecap="round" stroke-linejoin="round"/><path d="M16.41 4C18.35 4 19.91 5.57 19.91 7.5C19.91 9.39 18.41 10.93 16.54 11C16.46 10.99 16.37 10.99 16.28 11" stroke-linecap="round" stroke-linejoin="round"/><path d="M4.15997 14.56C1.73997 16.18 1.73997 18.82 4.15997 20.43C6.90997 22.27 11.42 22.27 14.17 20.43C16.59 18.81 16.59 16.17 14.17 14.56C11.43 12.73 6.91997 12.73 4.15997 14.56Z" stroke-linecap="round" stroke-linejoin="round"/><path d="M18.3401 20C19.0601 19.85 19.7401 19.56 20.3001 19.13C21.8601 17.96 21.8601 16.03 20.3001 14.86C19.7501 14.44 19.0801 14.16 18.3701 14" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span>Admins</span>
                    </a>
                </li>

                {{--                <li>--}}
{{--                    <a href="settlements.html">--}}
{{--                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 10H22" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M11.5483 20.4998H6.43829C2.88829 20.4998 1.98828 19.6198 1.98828 16.1098V7.88977C1.98828 4.70977 2.72831 3.68977 5.51831 3.52977C5.79831 3.51977 6.10829 3.50977 6.43829 3.50977H17.5483C21.0983 3.50977 21.9983 4.38977 21.9983 7.89977V12.3098" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 16H10" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M22 18C22 18.75 21.79 19.46 21.42 20.06C20.73 21.22 19.46 22 18 22C16.54 22 15.27 21.22 14.58 20.06C14.21 19.46 14 18.75 14 18C14 15.79 15.79 14 18 14C20.21 14 22 15.79 22 18Z" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M16.4414 17.9995L17.4314 18.9895L19.5614 17.0195" stroke-linecap="round" stroke-linejoin="round"/></svg>--}}
{{--                        <span>Settlement</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="support.html">--}}
{{--                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.47998 18.35L10.58 20.75C10.98 21.15 11.88 21.35 12.48 21.35H16.28C17.48 21.35 18.78 20.45 19.08 19.25L21.48 11.95C21.98 10.55 21.08 9.34997 19.58 9.34997H15.58C14.98 9.34997 14.48 8.84997 14.58 8.14997L15.08 4.94997C15.28 4.04997 14.68 3.04997 13.78 2.74997C12.98 2.44997 11.98 2.84997 11.58 3.44997L7.47998 9.54997" stroke-miterlimit="10"/><path d="M2.38 18.35V8.55002C2.38 7.15002 2.98 6.65002 4.38 6.65002H5.38C6.78 6.65002 7.38 7.15002 7.38 8.55002V18.35C7.38 19.75 6.78 20.25 5.38 20.25H4.38C2.98 20.25 2.38 19.75 2.38 18.35Z" stroke-linecap="round" stroke-linejoin="round"/></svg>--}}
{{--                        <span>Support</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="messages.html">--}}
{{--                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 9C17 12.87 13.64 16 9.5 16L8.57001 17.12L8.02 17.78C7.55 18.34 6.65 18.22 6.34 17.55L5 14.6C3.18 13.32 2 11.29 2 9C2 5.13 5.36 2 9.5 2C12.52 2 15.13 3.67001 16.3 6.07001C16.75 6.96001 17 7.95 17 9Z" stroke-linecap="round" stroke-linejoin="round"/><path d="M22 12.86C22 15.15 20.82 17.1801 19 18.4601L17.66 21.41C17.35 22.08 16.45 22.2101 15.98 21.6401L14.5 19.86C12.08 19.86 9.92001 18.7901 8.57001 17.1201L9.5 16.0001C13.64 16.0001 17 12.8701 17 9.00006C17 7.95006 16.75 6.96007 16.3 6.07007C19.57 6.82007 22 9.58005 22 12.86Z" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 9H12" stroke-linecap="round" stroke-linejoin="round"/></svg>--}}
{{--                        <span>Messaging</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="{{  request()->routeIs('airtime') ? 'active' : '' }}">
                    <a href="{{route('airtime')}}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.29 4.13999L17.22 7.92997C17.21 8.44997 17.54 9.13999 17.96 9.44999L20.44 11.33C22.03 12.53 21.77 14 19.87 14.6L16.64 15.61C16.1 15.78 15.53 16.37 15.39 16.92L14.62 19.86C14.01 22.18 12.49 22.41 11.23 20.37L9.46999 17.52C9.14999 17 8.39 16.61 7.79 16.64L4.45003 16.81C2.06003 16.93 1.38002 15.55 2.94002 13.73L4.92 11.43C5.29 11 5.46 10.2 5.29 9.65998L4.28005 6.42997C3.69005 4.52997 4.75004 3.47999 6.64004 4.09999L9.59005 5.06999C10.09 5.22999 10.84 5.11998 11.26 4.80998L14.34 2.58998C16 1.38998 17.33 2.08999 17.29 4.13999Z" stroke-linecap="round" stroke-linejoin="round"/><path d="M21.91 22L18.88 18.97" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span>VAS</span>
                    </a>
                </li>
                <li class="{{  request()->routeIs('settings') ? 'active' : '' }}">
                    <a href="{{route('settings')}}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 12.8799V11.1199C2 10.0799 2.85 9.21994 3.9 9.21994C5.71 9.21994 6.45 7.93994 5.54 6.36994C5.02 5.46994 5.33 4.29994 6.24 3.77994L7.97 2.78994C8.76 2.31994 9.78 2.59994 10.25 3.38994L10.36 3.57994C11.26 5.14994 12.74 5.14994 13.65 3.57994L13.76 3.38994C14.23 2.59994 15.25 2.31994 16.04 2.78994L17.77 3.77994C18.68 4.29994 18.99 5.46994 18.47 6.36994C17.56 7.93994 18.3 9.21994 20.11 9.21994C21.15 9.21994 22.01 10.0699 22.01 11.1199V12.8799C22.01 13.9199 21.16 14.7799 20.11 14.7799C18.3 14.7799 17.56 16.0599 18.47 17.6299C18.99 18.5399 18.68 19.6999 17.77 20.2199L16.04 21.2099C15.25 21.6799 14.23 21.3999 13.76 20.6099L13.65 20.4199C12.75 18.8499 11.27 18.8499 10.36 20.4199L10.25 20.6099C9.78 21.3999 8.76 21.6799 7.97 21.2099L6.24 20.2199C5.33 19.6999 5.02 18.5299 5.54 17.6299C6.45 16.0599 5.71 14.7799 3.9 14.7799C2.85 14.7799 2 13.9199 2 12.8799Z" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="mainBarNavContainer">
        <div class="materialCard mainBarNavDiv">
            <div class="mainBarNavProfile">
                <div class="sideBarBtn">
                    <svg class="showOnTablet showOnMobile" width="28" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.5 12H22.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M1.5 21H22.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M1.5 3H22.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <img src="/verdant_assets/img/user.png" alt="">
                <a href="{{route('settings')}}"><h4>Hello {{\Illuminate\Support\Facades\Auth::user()->firstname}},</h4></a>
            </div>
            <div class="flex-between">
{{--                <div class="notifications">--}}
{{--                    <svg class="notification" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.3755 16.5765C20.5348 15.678 18.9612 14.3266 18.9612 9.90014C18.9627 8.31165 18.4072 6.7723 17.3904 5.54694C16.3735 4.32158 14.9589 3.48682 13.3898 3.1863V2.28476C13.3898 2.10293 13.3538 1.92288 13.2838 1.75489C13.2138 1.5869 13.1112 1.43426 12.9818 1.30569C12.8525 1.17712 12.6989 1.07513 12.5299 1.00554C12.361 0.935961 12.1798 0.900146 11.9969 0.900146C11.814 0.900146 11.6329 0.935961 11.4639 1.00554C11.2949 1.07513 11.1414 1.17712 11.012 1.30569C10.8827 1.43426 10.7801 1.5869 10.7101 1.75489C10.6401 1.92288 10.6041 2.10293 10.6041 2.28476V3.1863C9.03499 3.48682 7.62033 4.32158 6.60347 5.54694C5.58662 6.7723 5.03117 8.31165 5.03267 9.90014C5.03267 14.3266 3.45906 15.678 2.6184 16.5765C2.37861 16.8307 2.24668 17.167 2.25006 17.5155C2.25023 17.6977 2.28651 17.878 2.35683 18.0462C2.42716 18.2144 2.53015 18.3672 2.65991 18.4958C2.78968 18.6244 2.94367 18.7263 3.11309 18.7957C3.2825 18.865 3.46402 18.9005 3.64725 18.9001H20.3528C20.536 18.9005 20.7175 18.865 20.887 18.7957C21.0564 18.7263 21.2104 18.6244 21.3401 18.4958C21.4699 18.3672 21.5729 18.2144 21.6432 18.0462C21.7135 17.878 21.7498 17.6977 21.75 17.5155C21.7517 17.1662 21.6175 16.8297 21.3755 16.5765Z"/><path d="M10.5 1.65015H13.5V3.15015L12.75 3.97515H12H11.25L10.5 3.15015V1.65015Z" fill="#51526C"/><path d="M15 21C15 21.7956 14.6839 22.5587 14.1213 23.1213C13.5587 23.6839 12.7956 24 12 24C11.2044 24 10.4413 23.6839 9.87868 23.1213C9.31607 22.5587 9 21.7956 9 21L12 21H15Z" fill="#51526C"/></svg>--}}
{{--                    <span class="badge">3</span>--}}

{{--                    <div class="notificationsList">--}}
{{--                        <div class="notificationHeader flex-between">--}}
{{--                            <div>--}}
{{--                                <h5>Notifications</h5>--}}
{{--                            </div>--}}
{{--                            <div class="closeNotifications">--}}
{{--                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.46967 3.46967C3.76256 3.17678 4.23744 3.17678 4.53033 3.46967L20.5303 19.4697C20.8232 19.7626 20.8232 20.2374 20.5303 20.5303C20.2374 20.8232 19.7626 20.8232 19.4697 20.5303L3.46967 4.53033C3.17678 4.23744 3.17678 3.76256 3.46967 3.46967Z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M20.5303 3.46967C20.8232 3.76256 20.8232 4.23744 20.5303 4.53033L4.53033 20.5303C4.23744 20.8232 3.76256 20.8232 3.46967 20.5303C3.17678 20.2374 3.17678 19.7626 3.46967 19.4697L19.4697 3.46967C19.7626 3.17678 20.2374 3.17678 20.5303 3.46967Z"></path></svg>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <h5>A new client just registered.</h5>--}}
{{--                            <h6>April 14</h6>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <h5>Ticket ID was closed recently.</h5>--}}
{{--                            <h6>May 27</h6>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <h5>Terminal ID 123DGB5 has been mapped.</h5>--}}
{{--                            <h6>May 27</h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div>
                    <a href="{{route('settings')}}">
                        <svg class="settings" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 12.8799V11.1199C2 10.0799 2.85 9.21994 3.9 9.21994C5.71 9.21994 6.45 7.93994 5.54 6.36994C5.02 5.46994 5.33 4.29994 6.24 3.77994L7.97 2.78994C8.76 2.31994 9.78 2.59994 10.25 3.38994L10.36 3.57994C11.26 5.14994 12.74 5.14994 13.65 3.57994L13.76 3.38994C14.23 2.59994 15.25 2.31994 16.04 2.78994L17.77 3.77994C18.68 4.29994 18.99 5.46994 18.47 6.36994C17.56 7.93994 18.3 9.21994 20.11 9.21994C21.15 9.21994 22.01 10.0699 22.01 11.1199V12.8799C22.01 13.9199 21.16 14.7799 20.11 14.7799C18.3 14.7799 17.56 16.0599 18.47 17.6299C18.99 18.5399 18.68 19.6999 17.77 20.2199L16.04 21.2099C15.25 21.6799 14.23 21.3999 13.76 20.6099L13.65 20.4199C12.75 18.8499 11.27 18.8499 10.36 20.4199L10.25 20.6099C9.78 21.3999 8.76 21.6799 7.97 21.2099L6.24 20.2199C5.33 19.6999 5.02 18.5299 5.54 17.6299C6.45 16.0599 5.71 14.7799 3.9 14.7799C2.85 14.7799 2 13.9199 2 12.8799Z" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="mainBodyContainer">
        @yield('contents')
    </section>
</div>
<script src="/verdant_assets/js/apexcharts.js"></script>
<script src="/verdant_assets/js/jquery.min.js"></script>
<script src="/verdant_assets/js/bootstrap.bundle.min.js"></script>
<script src="/verdant_assets/js/moment.min.js"></script>
<script src="/verdant_assets/js/daterangepicker.min.js"></script>
<script src="/verdant_assets/js/jquery.dataTables.min.js"></script>
<script src="/verdant_assets/js/jspdf.min.js"></script>
<script src="/verdant_assets/js/jspdf.plugin.autotable.min.js"></script>
<script src="/verdant_assets/js/tableHTMLExport.js"></script>
<script src="/verdant_assets/js/dashboard-script.js"></script>
@yield('scripts')
</body>
</html>
