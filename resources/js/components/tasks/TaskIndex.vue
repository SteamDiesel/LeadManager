<template>
	<div>
		<div>
			<h3 class="text-lg leading-6 font-medium text-gray-900">
				Tasks
			</h3>
			<p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
				This is a list of all of your tasks.
			</p>
		</div>

		<div class="bg-white shadow overflow-hidden sm:rounded-md">
			<ul>
				<task-item-component v-for="(task, index) in tasks" :key="index" :task="task"></task-item-component>
			</ul>
		</div>
	</div>
</template>

<script>

export default {
    name: "TaskIndex",
    data(){
        return {
            tasks: [
                {
                    title: "Call",
                    description: "this is a task description. ready to describe the task for the user.",
                    lead: {
                        id: 1,
                        title: "Jamie Mason"
                    },
                    action: "call",
                    created_at: "2020-07-12",
                    updated_at: "2020-07-13",
                    due_at: "2020-08-12",
                    created_by: {
                        name: "Jason Law"
                    },
                    subtasks: [
                        {title: "incomplete subtask", completed_at: ""},
                        {title: "this is a subtask", completed_at: ""},
                        {title: "this is a subtask - complete", completed_at: "2020-05-12"},
                    ]
                },
            ]
               
        }
    }
};
</script>

<style></style>
