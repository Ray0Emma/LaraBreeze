<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-2">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="p-4 border-b border-gray-200 shadow ">
                    <div class="bg-white">
                        <select name="qst" wire:model="qst_select"
                            class="px-4 py-3 w-full bg-white rounded-md border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                            <option value=""> Select Filter </option>
                            @for ($i = 0; $i < count($qsts); $i++)
                                <option value="{{ $i }}">{{ $qsts[$i] }}</option>
                            @endfor

                        </select>
                    </div>
                </div>
                <div class="mt-28 p-4 border-b border-gray-200 shadow ">
                    @switch($qst_select)
                        @case('0')
                            {{ $qst_select }}
                            @include('livewire.data.qst1')
                        @break

                        @case('1')
                            {{ $qst_select }}
                            @include('livewire.data.qst1')
                        @break

                        @case('2')
                            {{ $qst_select }}
                            @include('livewire.data.qst1')
                        @break

                        @case('3')
                            {{ $qst_select }}
                            @include('livewire.data.qst1')
                        @break

                        @case('4')
                            {{ $qst_select }}
                            @include('livewire.data.qst1')
                        @break

                        @case('5')
                            {{ $qst_select }}
                            @include('livewire.data.qst1')
                        @break

                        @case('6')
                            {{ $qst_select }}
                            @include('livewire.data.qst1')
                        @break

                        @case('7')
                            {{ $qst_select }}
                            @include('livewire.data.qst1')
                        @break

                        @case('8')
                            {{ $qst_select }}
                            @include('livewire.data.qst1')
                        @break

                        @case('9')
                            {{ $qst_select }}
                            @include('livewire.data.qst1')
                        @break

                        @case('10')
                            {{ $qst_select }}
                            @include('livewire.data.qst1')
                        @break

                        @case('11')
                            {{ $qst_select }}
                            @include('livewire.data.qst1')
                        @break

                        @default
                    @endswitch
                </div>
            </div>
        </div>


        <script>
            // $(document).ready(function() {
            //     $('#sampleTable').DataTable({
            //         responsive: true,
            //     });
            // });
        </script>
    </div>
