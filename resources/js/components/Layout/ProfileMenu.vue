<template>
	<div class="container">
		<div class="ml-3 relative">
			<div>
				<button
					class="max-w-xs flex items-center text-sm rounded-full focus:outline-none focus:shadow-outline"
					id="user-menu"
					aria-label="User menu"
					aria-haspopup="true"
					@click="show = !show"
				>
					<img
						class="h-8 w-8 rounded-full"
						src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
						alt=""
					/>
				</button>
			</div>
			<!--
              Profile dropdown panel, show/hide based on dropdown state.

              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
			<div
				v-show="show"
					
				class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg"
			>
				<div
					class="py-1 rounded-md bg-white shadow-xs"
					role="menu"
					aria-orientation="vertical"
					aria-labelledby="user-menu"
				>
					<slot name="profile"></slot>
					<slot name="settings"></slot>
					<slot name="signout"></slot>
                                    

				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	name: "ProfileMenu",
	data(){
		return {
			show: false
		}
	}
};
</script>
