<div class="hcf_box">
    <style scoped>
        .hcf_box{
            display: grid;
            grid-template-columns: max-content 1fr;
            grid-row-gap: 10px;
            grid-column-gap: 20px;
        }
        .hcf_field{
            display: contents;
        }
    </style>
    <p class="meta-options hcf_field">
        <label for="hcf_author">Título grande</label>
        <input id="hcf_author"
               type="text"
               name="hcf_author"
               value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_author', true ) ); ?>"
        >
    </p>
</div>