<template>
	<div class="flex">
		<lead-column-component
			v-for="(stage, index) in sorted_stages"
			:key="index"
			:stage="stage"
			:leads="leads"
		></lead-column-component>
		<div class="mr-4 flex flex-col">
			<div v-if="!show">
				<button
					@click.prevent="show = true"
					type="button"
					class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150 sm:w-auto sm:text-sm sm:leading-5"
				>
					Add Stage
				</button>
			</div>
			<div v-if="show">
				<div>
					<label for="title" class="sr-only">Title</label>
					<div class="relative rounded-md shadow-sm">
						<input
							type="text"
							id="title"
							v-model="title"
							class="form-input block w-full sm:text-sm sm:leading-5"
							placeholder="Stage Title"
						/>
					</div>
				</div>
				<div>
					<label for="description" class="sr-only">Description</label>
					<div class="relative rounded-md shadow-sm">
						<input
							type="text"
							id="description"
							v-model="description"
							class="form-input block w-full sm:text-sm sm:leading-5"
							placeholder="Brief Description of the stage"
						/>
					</div>
				</div>
				<div>
					<label for="order" class="sr-only">Order</label>
					<div class="relative rounded-md shadow-sm">
						<input
							id="order"
							v-model.number="order"
							type="number"
							class="form-input block w-full sm:text-sm sm:leading-5"
							placeholder="Order"
						/>
					</div>
				</div>
				<div class="flex justify-between mb-4">
				<span class="inline-flex rounded-md shadow-sm">
					<button
                    @click.prevent="show = false"
						type="button"
						class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150"
					>
						Cancel
					</button>
				</span>
				<span class="inline-flex rounded-md shadow-sm">
					<button
						@click.prevent="add_stage"
						type="button"
						class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150 sm:w-auto sm:text-sm sm:leading-5"
					>
						Save
					</button>
				</span>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import Axios from "axios";
export default {
	name: "LeadIndex",
	props: {
		stages: Array,
		leads: Array
	},
	data() {
		return {
			title: "",
			description: "",
			order: "",
			show: ""
		};
	},
	watch: {
		stages(newStages, oldStages) {
			this.sorted_stages();
		}
	},
	computed: {
		sorted_stages() {
			return this.stages.sort((a, b) => (a.order > b.order ? 1 : -1));
		}
	},
	methods: {
		add_stage() {
			Axios.post("/api/stage", {
				title: this.title,
				description: this.description,
				order: this.order
			})
				.then(response => {
					console.log(response.data.message),
						this.stages.push(response.data.stage),
						(this.title = ""),
						(this.description = ""),
						(this.order = "");
				})
				.catch(error => {
					console.log(error);
				});
		}
	}
};
</script>

<style></style>
