<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import Navbar from "../../Shared/Navbar.vue";
defineProps({
    appName: String,
    time: String
});
</script>
<template>
    <header class="shadow-sm">
        <Navbar :app-name="appName" />
    </header>
    <main>
        <div class="container py-4">
            <h1>Users</h1>
            <p class="lead">Table of users</p>

            <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui maxime optio sequi molestiae
                aspernatur mollitia laudantium sapiente cumque quos architecto, quam facere suscipit modi cupiditate
                odio dolor! Inventore voluptatum fugit, atque quaerat minima, ea, enim voluptas quasi placeat facilis
                veritatis cum officia ducimus. Harum eius, aliquam voluptatum, soluta quibusdam sed iusto laborum
                delectus debitis quasi enim explicabo dolore minima odit at eum labore praesentium voluptatibus. Unde
                praesentium maiores neque incidunt minus saepe voluptate obcaecati quo tempore eum, iusto fugiat omnis
                aspernatur odit ratione? Non aspernatur, enim aperiam delectus odio commodi. Minus optio debitis cum
                temporibus quaerat, maxime fuga ipsa? Illo distinctio, non veniam minus ad aliquam asperiores,
                laudantium, maxime accusantium minima ipsa alias laboriosam animi at nostrum dolorem cum possimus eos
                quas? Voluptas beatae perferendis quos nobis ex necessitatibus dolor incidunt ut, mollitia reiciendis
                enim molestias, voluptatibus suscipit repellat nostrum aspernatur iusto, repellendus consequatur?
                Temporibus qui, eveniet modi maxime consectetur libero dolorem et excepturi? Quidem hic recusandae eum
                rem, voluptate ut ab temporibus cupiditate porro saepe aliquid repellendus beatae vel natus impedit
                sapiente debitis nemo? Quibusdam, voluptate fugiat rerum ullam corporis dolorum. Adipisci eum sit minus
                necessitatibus expedita, id, dicta error ut in natus nesciunt. Autem enim ad repellat officiis, harum
                aut modi. Fuga accusantium veniam esse incidunt quia. Et sapiente aspernatur corrupti illo eveniet
                doloribus, esse, quisquam non maiores quae in! Accusamus ipsa aliquid deleniti quos iusto, explicabo
                reprehenderit numquam doloribus placeat pariatur facilis dignissimos dolorem et facere quas earum nihil,
                consequatur vel neque voluptatem? Totam iusto voluptate earum eaque. Assumenda unde, corrupti dicta
                reprehenderit inventore recusandae harum maxime voluptatem suscipit obcaecati neque debitis quis ipsa
                eum temporibus voluptas labore possimus natus. Velit exercitationem rerum, ipsa culpa illum optio ipsam
                aliquam consequatur soluta officiis reiciendis porro? Debitis vero magni quos veniam fuga repudiandae
                iusto, quasi nisi expedita sed commodi, tempore earum nemo ullam iste eaque officia incidunt aut rerum
                quidem. Voluptatibus in nihil dolorem reiciendis, eligendi omnis, dicta, modi enim excepturi minima
                quibusdam nemo similique. Officiis repellendus eligendi at voluptatum amet. Voluptatum totam amet eum
                labore doloribus facere excepturi ipsum voluptas incidunt optio magnam dolore ea, id libero consequuntur
                sint animi illum vel quos suscipit mollitia praesentium saepe at rem! Amet omnis rem commodi quos
                molestiae cumque rerum? Exercitationem, aut sit? Aliquid ratione labore sed corporis asperiores cum
                perspiciatis ad, in exercitationem quae deserunt maiores id sit sint a et architecto nam iusto
                necessitatibus doloribus vel quaerat recusandae quod ullam! Quos consequatur explicabo est ad deleniti
                dolorum aspernatur quaerat blanditiis nostrum rem. Facere incidunt unde ad impedit recusandae laboriosam
                quas itaque pariatur libero voluptate error quod a, temporibus repellendus vitae amet tempora sed. Dolor
                minima veritatis molestias atque vitae, dolorum quidem cum, dolores deleniti animi alias expedita
                exercitationem consequuntur nemo accusantium eos! Ducimus vel odio minus, cupiditate nisi qui eius
                veritatis aperiam expedita animi unde nemo laborum saepe, aspernatur velit maxime repudiandae reiciendis
                sed autem! Optio voluptatum eligendi suscipit exercitationem debitis fugit, sequi dolorem neque maxime
                hic, eius, quas voluptates. Fugit molestias eos itaque ad omnis quasi nesciunt? Porro amet ullam omnis
                iure necessitatibus id reprehenderit nulla earum repellat distinctio culpa quos minus molestias eius
                error consequuntur, commodi harum numquam odio voluptas doloremque. Voluptate soluta nihil omnis harum
                saepe porro possimus vero mollitia voluptates, voluptatum totam minus adipisci ad. Explicabo, corporis.
                Consequuntur eos aut aliquam adipisci nam quae, saepe cupiditate nisi, magni voluptatum illum qui? Quia
                quasi assumenda corrupti placeat? Atque, assumenda consectetur! Incidunt, sint nemo delectus placeat,
                pariatur est itaque veritatis voluptatibus, cum iusto nobis laboriosam. Voluptate quas praesentium
                maiores modi sint omnis sequi labore quod doloribus nobis provident quos quia, rem vel accusamus
                eligendi laboriosam nisi quisquam dolor nostrum voluptatibus ex facere! Illo, dolorum fuga, reiciendis
                quia impedit iusto, accusamus beatae quos consectetur molestias explicabo molestiae nulla recusandae
                illum odit ducimus sapiente voluptatibus repudiandae amet modi ab. Rerum tempora, nobis ea tempore enim
                cum. Incidunt, doloribus quod.</p>


            <p class="lead">The current time is <strong>{{ time }}</strong></p>

            <Link href="/users?level=pro" preserve-scroll>Refresh</Link>
        </div>
    </main>
</template>
