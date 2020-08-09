<template>
	<div class="mr-8 w-64">
		<div v-if="!show_edit" @click="show_edit = true" class="mb-3">
			<h2 class="text-xl">{{ stage.title }}</h2>
			<p class="text-sm italic text-gray-500">{{ stage.description }}</p>
		</div>
		<div v-if="show_edit">
			<div>
				<label for="title" class="sr-only">Title</label>
				<div class="relative rounded-md shadow-sm">
					<input
						type="text"
						id="title"
						v-model="stage.title"
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
						v-model="stage.description"
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
						v-model.number="stage.order"
						type="number"
						class="form-input block w-full sm:text-sm sm:leading-5"
						placeholder="Order"
					/>
				</div>
			</div>
			<div class="flex justify-between mb-4">
				<span class="inline-flex rounded-md shadow-sm">
					<button
                    @click.prevent="show_edit = false"
						type="button"
						class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150"
					>
						Cancel
					</button>
				</span>
				<span class="inline-flex rounded-md shadow-sm">
					<button
						@click.prevent="update_stage"
						type="button"
						class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150 sm:w-auto sm:text-sm sm:leading-5"
					>
						Save
					</button>
				</span>
			</div>
		</div>

		<ul class="w-64">
			<li
				v-for="(lead, index) in column_leads"
				:key="index"
				class="col-span-1 bg-white rounded-lg shadow mb-4"
			>
				<lead-card-component :lead="lead"></lead-card-component>
			</li>
		</ul>
	</div>
</template>

<script>
import Axios from "axios";
export default {
	name: "LeadStageColumn",
	props: {
		leads: Array,
		stage: Object
	},
	data() {
		return {
			show_edit: false
		};
	},
	computed: {
		column_leads() {
			var ar = this.leads.filter(lead => {
				return lead.stage_id == this.stage.id;
			});
			return ar;
		}
	},
	methods: {
		update_stage() {
			Axios.post("/api/stage/" + this.stage.id, {
				title: this.stage.title,
				description: this.stage.description,
				order: this.stage.order
			})
				.then(response => {
					console.log(response.data.message), (this.show_edit = false);
				})
				.catch(error => {
					console.log(error);
				});
		}
	}
};
</script>

<style></style>
