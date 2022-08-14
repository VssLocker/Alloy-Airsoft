@extends('layouts.base')

@section('content')
    <x-page.gameinfo class="items-end py-9">
        <x-text.title class="h-min text-white font-normal">
            {{ __($game->name) }}
        </x-text.title>
        <x-text.gamedate :game='$game' class="" />
        <x-text.gametime :game='$game' class="" />
    </x-page.gameinfo>
    
    <x-text.cords first_cord='{{ $game->first_cord }}' second_cord='{{ $game->second_cord }}' />
    <x-gamecard.body>
        <x-elems.map id="map" />
    </x-gamecard.body>

    <div class="flex flex-col mt-20">
        <div class="flex flex-row justify-between w-full">
            <x-text.title>
                {{ __('Info') }}
            </x-text.title>
            <div class="flex flex-row justify-between w-[60%] h-[140px] ease-out duration-200 overflow-hidden items-start" id="info_block">
                <div class="text-left flex flex-col items-start w-[80%]">
                    <x-text.subtitle class="mb-2">
                        Mercenaries!
                    </x-text.subtitle>
                    <x-text.paragraph id="first_text" class="w-[80%] text-[#CACACA] mb-6">
                        Our company is extremely interested in renting your services for identification signals on territory hostile to us with a large group of unidentified armed individuals involved in activities and for information about which we of course we will pay you.
                    </x-text.paragraph>
                    <x-text.paragraph id="second_text" class="text-[#CACACA]">
                        “Colleagues”, do with them at your own discretion, no fines or rewards for You don't have to remove them. To clarify one point, we cannot transfer a group of more than 11 people, so Choose your best fighters and equip as you see fit. Take with you everything you need, because due to high risks we are not ready to transfer supplies to this territory.
                    </x-text.paragraph>
                </div>
                <img src="{{ asset('image/arrow.svg') }}" alt="arrows" class="cursor-pointer duration-200 ease-out" onclick="showInfoBlock()" id="info_arrow">
            </div>
        </div>
        <div class="h-[2px] mt-10 mb-10 w-full bg-[#242424]"></div>

        <div class="flex flex-row justify-between w-full">
            <x-text.title>
                {{ __('Rules') }}
            </x-text.title>
            <div class="flex flex-row justify-end w-[60%]">
                <div class="text-left flex flex-row items-start justify-between h-[160px] overflow-hidden duration-300 ease-out" id="rules_block">
                    <div class="flex flex-col">
                        <x-text.block>
                            <x-text.subtitle class="mb-2">
                                1. Groups
                            </x-text.subtitle>
                            <x-text.paragraph class="text-[#CACACA]">
                                - There will be no team in the usual environment, only your group and an unknown number of other similar groups;
                            </x-text.paragraph>
                            <x-text.paragraph class="text-[#CACACA]">
                                - The group can be any size from 2 to 11 people;
                            </x-text.paragraph>
                            <x-text.paragraph class="text-[#CACACA]">
                                - There are no restrictions on equipment and camouflage for a group, the group gathers according to its destination.
                            </x-text.paragraph>
                        </x-text.block>
                        <x-text.block>
                            <x-text.subtitle class="mb-2">
                                2. Start of the game and interaction with the hosts
                            </x-text.subtitle>
                            <x-text.paragraph class="text-[#CACACA]">
                                - Registration takes place at the parking lot, after which the group is allowed to move to their spawn point;
                            </x-text.paragraph>
                            <x-text.paragraph class="text-[#CACACA]">
                                - All players in a single group need to add a host in Messenger to receive tasks directly on the players' mobile devices;
                            </x-text.paragraph>
                            <x-text.paragraph class="text-[#CACACA]">
                                - To contact the host, you can use both mobile devices and a pre-installed radio wave;
                            </x-text.paragraph>
                            <x-text.paragraph class="text-[#CACACA]">
                                - The conditions for completing the task will be transmitted to the players using the messenger, until then the conditions of any task will be unknown.
                            </x-text.paragraph>
                        </x-text.block>
                        <x-text.block>
                            <x-text.subtitle class="mb-2">
                                3. Injuries
                            </x-text.subtitle>
                            <x-text.paragraph class="text-[#CACACA]">
                                - The game has a wound system. Those. after the first hit anywhere, the player is considered wounded and must sit on the ground without a death bandage;
                            </x-text.paragraph>
                            <x-text.paragraph class="text-[#CACACA]">
                                - Injured players are allowed to call their own for help;
                            </x-text.paragraph>
                            <x-text.paragraph class="text-[#CACACA]">
                                - A wounded player can be lifted by bandaging any limb;
                            </x-text.paragraph>
                            <x-text.paragraph class="text-[#CACACA]">
                                - The bandage can be removed 60 minutes after application.
                            </x-text.paragraph>
                        </x-text.block>
                        <x-text.block>
                            <x-text.subtitle class="mb-2">
                                4. Kill
                            </x-text.subtitle>
                            <x-text.paragraph class="text-[#CACACA]">
                                - The player is considered dead after a second hit in the status of wounded or with a bandage;
                            </x-text.paragraph>
                            <x-text.paragraph class="text-[#CACACA]">
                                - The player is considered dead after being attacked with a melee weapon in any case.
                            </x-text.paragraph>
                        </x-text.block>
                        <x-text.block>
                            <x-text.subtitle class="mb-2">
                                5. Game bans
                            </x-text.subtitle>
                            <x-text.paragraph class="text-[#CACACA]">
                                - It is forbidden to replenish at the place of arrival at the game / parking lot. Anyone who replenishes / changes equipment automatically disqualifies the entire team;
                            </x-text.paragraph>
                            <x-text.paragraph class="text-[#CACACA]">
                                - Act outside the boundaries of Canadian criminal law;
                            </x-text.paragraph>
                            <x-text.paragraph class="text-[#CACACA]">
                                - Using any pyrotechnics (Grenades, Flares).
                            </x-text.paragraph>
                        </x-text.block>
                    </div>
                    <img src="{{ asset('image/arrow.svg') }}" alt="arrows" class="cursor-pointer duration-200 ease-out" onclick="showRulesBlock()" id="rules_arrow">
                </div>
            </div>
        </div>
    </div>
    <div class="h-[2px] mt-10 mb-10 w-full bg-[#242424]"></div>
    @include('includes.registration')
@endsection