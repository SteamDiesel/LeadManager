<template>
  <li>
					<div
						
						class="block hover:bg-gray-200 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out"
					>
						<div class="px-4 py-4 sm:px-6">
							<div class="flex items-center justify-between">
								<div
									class="text-sm leading-5 font-medium text-indigo-600 truncate"
								>
									<h2>
                                        {{task.title}}
                                    </h2>
                                    <p>
                                        {{task.description}}
                                    </p>
								</div>
								<div class="ml-2 flex-shrink-0 flex">
									<span
										class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"
									>
										{{task.action}}
									</span>
								</div>
							</div>
							<div class="mt-2 sm:flex sm:justify-between">
								<div class="sm:flex">
									<a
                                        :href="lead_uri"
										class="mr-6 flex items-center text-sm leading-5 text-gray-500"
									>
										<svg class="mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                        </svg>
										{{task.lead.title}}
									</a>
									<div
										class="mr-2 flex items-center text-sm leading-5 text-gray-500 sm:mt-0"
									>
										<svg class="mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path class="secondary" fill-rule="evenodd" d="M12 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
                                        </svg>
										{{subtask_summary}}
									</div>
								</div>
								<div
									class="mt-2 flex items-center text-sm leading-5 text-gray-500 sm:mt-0"
								>
									<svg
										class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
										viewBox="0 0 20 20"
										fill="currentColor"
									>
										<path
											fill-rule="evenodd"
											d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
											clip-rule="evenodd"
										/>
									</svg>
									<span>
										Due by
										<time :datetime="task.due_at">{{task.due_at}}</time>
									</span>
								</div>
							</div>
						</div>
					</div>
				</li>
</template>

<script>
export default {
name: "Task",
props:{
    task: Object
},
computed:{
    lead_uri(){
        return "/lead/" + this.task.lead.id
    },
    subtask_summary(){
        var ar = this.task.subtasks
        var incomplete = ar.filter(item => {
            return item.completed_at == ""
        })
        return incomplete.length + "/" + ar.length
    }
}
}
</script>

<style>

</style>