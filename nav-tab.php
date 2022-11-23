<!-- nav-tab -->
<div class="px-4 sm:px-12 md:px-20 lg:px-28" x-data="{tabPanel : 'description' }">
    <!-- tab panal buttons-->
    <div class="flex items-center text-sm overflow- border-b border-gray-300 transition-all duration-300" aria-orientation="horizontal" role="tablist">
        <button @click="tabPanel !== 'description' ? tabPanel = 'description' : tabPanel = 'description'" class="w-28 py-1.5 transition-all duration-300" :class="tabPanel == 'description' ? 'border-gray-300 border border-b-0 scale-[1.07] bg-white font-medium' : 'hover:bg-yellow-400' ">Description</button>
        <button @click="tabPanel !== 'details' ? tabPanel = 'details' : tabPanel = 'details'" class="w-28 py-1.5 transition-all duration-300" :class="tabPanel == 'details' ? 'border-gray-300 border border-b-0 scale-[1.04] bg-white font-medium' : 'hover:bg-yellow-400' ">Details</button>
        <button @click="tabPanel !== 'reviews' ? tabPanel = 'reviews' : tabPanel = 'reviews'" class="w-28 py-1.5 transition-all duration-300" :class="tabPanel == 'reviews' ? 'border-gray-300 border border-b-0 scale-[1.04] bg-white font-medium' : 'hover:bg-yellow-400' ">Reviews</button>
        
    </div>
    <div class="py-8  bg-gray-20 border-b border-gray-300">
        <!-- tab panal Section Data -->
        <div class="overflow-hidden block w-full space-y-4 text-sm" x-ref="description" :class="tabPanel == 'description' ? 'block w-full' : 'hidden w-0'">
            <h2 class="text-xl">Discription</h2>
            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet eum, explicabo officiis accusamus illo rerum iste ullam laboriosam sed obcaecati voluptatum magni inventore porro sit labore quas, quo odio a!</p>
            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet eum, explicabo officiis accusamus illo rerum iste ullam laboriosam sed obcaecati voluptatum magni inventore porro sit labore quas, quo odio a!</p>
            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet eum, explicabo officiis accusamus illo rerum iste ullam laboriosam sed obcaecati voluptatum magni inventore porro sit labore quas, quo odio a!</p>
            <nav class="py-2">
                <ul class="ml-8 list-inside list-disc">
                    <li class="">Feature 1</li>
                    <li class="">Feature 2</li>
                    <li class="">Feature 3</li>
                </ul>
            </nav>
            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet eum, explicabo officiis accusamus illo rerum iste ullam laboriosam sed obcaecati voluptatum magni inventore porro sit labore quas, quo odio a!</p>
            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet eum, explicabo officiis accusamus illo rerum iste ullam laboriosam sed obcaecati voluptatum magni inventore porro sit labore quas, quo odio a!</p>
        </div>
        <div class="overflow-hidden block w-full space-y-4 text-sm" x-ref="details" :class="tabPanel == 'details' ? 'block w-full' : 'hidden w-0'">
            <h2 class="text-xl">Additional Info</h2>
            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet eum, explicabo officiis accusamus illo rerum iste ullam laboriosam sed obcaecati voluptatum magni inventore porro sit labore quas, quo odio a!</p>
            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet eum, explicabo officiis accusamus illo rerum iste ullam laboriosam sed obcaecati voluptatum magni inventore porro sit labore quas, quo odio a!</p>
            <nav class="">
                <ul class="space-y-2 ml-12">
                    <li class="flex items-center gap-x-4"><i class="fas fa-angle-right text-xs"></i> Type: Analog Watch</li>
                    <li class="flex items-center gap-x-4"><i class="fas fa-angle-right text-xs"></i> Dial: Feature 2</li>
                    <li class="flex items-center gap-x-4"><i class="fas fa-angle-right text-xs"></i> Clasp Type: Feature 3</li>
                    <li class="flex items-center gap-x-4"><i class="fas fa-angle-right text-xs"></i> Type: Feature 1</li>
                    <li class="flex items-center gap-x-4"><i class="fas fa-angle-right text-xs"></i> Clasp Type: Feature 2</li>
                    <li class="flex items-center gap-x-4"><i class="fas fa-angle-right text-xs"></i> Clasp Type: Feature 3</li>
                    <li class="flex items-center gap-x-4"><i class="fas fa-angle-right text-xs"></i> Type: Feature 1</li>
                    <li class="flex items-center gap-x-4"><i class="fas fa-angle-right text-xs"></i> Others: Feature 2</li>
                    <li class="flex items-center gap-x-4"><i class="fas fa-angle-right text-xs"></i> Style Tip: Feature 3</li>
                </ul>
            </nav>
        </div>
        <div class="overflow-hidden block w-full space-y-4 text-sm" x-ref="tab1" :class="tabPanel == 'reviews' ? 'block w-full' : 'hidden w-0'">
            <h2 class="text-xl">Reviews</h2>
            <div class="divide-y divide-gray-200">
                <div class="space-y-3 py-3">
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores odio velit voluptate.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-x-6">
                            <div class="flex items-center gap-x-2 text-xs">
                                <i class="text-yellow-500 fas fa-user-alt"></i><i class="text-xs text-gray-500">AR Rahman</i>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <i class="text-yellow-500 fas fa-calendar-alt"></i><i class="text-xs text-gray-500">09.11.2022</i>
                            </div>
                        </div>
                        <div class="flex items-center text-xs text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="space-y-3 py-3">
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores odio velit voluptate.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-x-6">
                            <div class="flex items-center gap-x-2 text-xs">
                                <i class="text-yellow-500 fas fa-user-alt"></i><i class="text-xs text-gray-500">AR Rahman</i>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <i class="text-yellow-500 fas fa-calendar-alt"></i><i class="text-xs text-gray-500">09.11.2022</i>
                            </div>
                        </div>
                        <div class="flex items-center text-xs text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="space-y-3 py-3">
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores odio velit voluptate.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-x-6">
                            <div class="flex items-center gap-x-2 text-xs">
                                <i class="text-yellow-500 fas fa-user-alt"></i><i class="text-xs text-gray-500">AR Rahman</i>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <i class="text-yellow-500 fas fa-calendar-alt"></i><i class="text-xs text-gray-500">09.11.2022</i>
                            </div>
                        </div>
                        <div class="flex items-center text-xs text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>