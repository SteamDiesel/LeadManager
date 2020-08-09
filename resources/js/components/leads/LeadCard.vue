<template>
	<div
		class="w-full flex items-center justify-between p-4 space-x-6 hover:bg-gray-300"
	>
		<div class="flex-1 truncate">
			<div class="flex items-center space-x-3">
				<h3 class="text-gray-900 text-sm leading-5 font-medium truncate">
					{{ lead.title }}
				</h3>
			</div>
			<p class="mt-1 text-gray-500 text-sm leading-5 truncate">
				{{ lead.description }}
			</p>
		</div>
		<div class="border-t border-gray-200">
			<div class="-mt-px flex"></div>
		</div>
	</div>
</template>

<script>
export default {
	name: "LeadCard",
	props: {
		lead: Object
	}
};
</script>

<style></style>
