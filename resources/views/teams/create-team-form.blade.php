<x-jet-form-section submit="createTeam">
    <x-slot name="title">
        {{ __('Team Details') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Create a new team to collaborate with others on projects.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6">
            <x-jet-label value="{{ __('Team Owner') }}" />

            <div class="flex items-center mt-2">
                <img class="w-12 h-12 rounded-full object-cover" src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}">

                <div class="ml-4 leading-tight">
                    <div>{{ $this->user->name }}</div>
                    <div class="text-gray-700 text-sm">{{ $this->user->email }}</div>
                </div>
            </div>
        </div>

        <div x-data="{open: false, show: false}" class="col-span-6 sm:col-span-4">
            <div class="mb-4">
                @livewire('teams.plan-selector')
                <x-jet-label class="mb-4" for="name" value="{{ __('Choose your plan') }}" />
                {{-- <x-link-button href="#" @click.prevent="show = !show">{{ __('Click me') }}</x-link-button> --}}
                {{-- <div> 
                    <label id="listbox-label" class="block text-sm font-medium text-gray-700">Assigned to</label>
                    <div class="relative mt-1">
                      <button @click="open = true" type="button" class="relative w-full cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                        <span class="flex items-center">
                          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-6 w-6 flex-shrink-0 rounded-full">
                          <span class="ml-3 block truncate">Tom Cook</span>
                        </span>
                        <span class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                          <!-- Heroicon name: mini/chevron-up-down -->
                          <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
                          </svg>
                        </span>
                      </button>
                  
                      <!--
                        Select popover, show/hide based on select state.
                  
                        Entering: ""
                          From: ""
                          To: ""
                        Leaving: "transition ease-in duration-100"
                          From: "opacity-100"
                          To: "opacity-0"
                      -->

                      <template x-if="open">
                          <ul @click="open = false; show=true" class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
                            <!--
                              Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.
                              Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
                            -->
                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-3 pr-9" id="listbox-option-0" role="option">
                              <div class="flex items-center">
                                <img src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-6 w-6 flex-shrink-0 rounded-full">
                                <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                <span class="font-normal ml-3 block truncate">Wade Cooper</span>
                              </div>
                              <!--
                                Checkmark, only display for selected option.
                                Highlighted: "text-white", Not Highlighted: "text-indigo-600"
                              -->
                              <span class="text-indigo-600 absolute inset-y-0 right-0 flex items-center pr-4">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                              </span>
                            </li>
                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-3 pr-9" id="listbox-option-0" role="option">
                              <div class="flex items-center">
                                <img src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-6 w-6 flex-shrink-0 rounded-full">
                                <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                <span class="font-normal ml-3 block truncate">Wade Cooper</span>
                              </div>
                              <!--
                                Checkmark, only display for selected option.
                                Highlighted: "text-white", Not Highlighted: "text-indigo-600"
                              -->
                              <span class="text-indigo-600 absolute inset-y-0 right-0 flex items-center pr-4">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                              </span>
                            </li>
                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-3 pr-9" id="listbox-option-0" role="option">
                              <div class="flex items-center">
                                <img src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-6 w-6 flex-shrink-0 rounded-full">
                                <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                <span class="font-normal ml-3 block truncate">Wade Cooper</span>
                              </div>
                              <!--
                                Checkmark, only display for selected option.
                                Highlighted: "text-white", Not Highlighted: "text-indigo-600"
                              -->
                              <span class="text-indigo-600 absolute inset-y-0 right-0 flex items-center pr-4">
                                <!-- Heroicon name: mini/check -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                              </span>
                            </li>
                            <!-- More items... -->
                          </ul>
                      </template>
                    </div>
                  </div> --}}
                  
                {{-- <x-jet-input-error for="name" class="mt-2" /> --}}
            </div>
            <template x-if="show">
                <div>
                    <x-jet-label for="name" value="{{ __('Team Name') }}" />
                    <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autofocus />
                    <x-jet-input-error for="name" class="mt-2" />
                </div>
            </template>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-button>
            {{ __('Create') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
