<template>
    <div>
        <button @click="markedAsSolution" class="px-4 py-2 bg-green-200 border border-transparent rounded-md font-semibold text-xs text-grey-300 uppercase tracking-widest hover:bg-green-400 hover:text-white active:bg-green-500 focus:outline-none focus:border-gray-900 disabled:opacity-25 transition ease-in-out duration-150">
            Mark as solution
        </button>
    </div>
</template>

<script>
export default {
    props: ['subject','comment'],
    methods: {
        markedAsSolution(){
            axios.post(`/markedAsSolution/${this.subject}/${this.comment}`)
                .then( response => {
                    if (response.status === 200){
                        console.log('success')
                    }
                })
                .catch( err => console.log(err));
        }
    }
}
</script>