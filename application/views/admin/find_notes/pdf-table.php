<style>
    .pdf_title {
        font-size: 26px;
        font-family: 'Inter';
        font-weight: 600;
        margin-bottom: 50px;
    }

    .pdf_author {
       
        margin-bottom: 10px;
    }

    .pdf-tags_wrap {
      
        margin-bottom: 20px;
    }

    .pdf-tag_title {
        margin-right: 10px;
        font-weight: 600;

    }

    .pdf_tag_names {
        font-size: 12px;
      
        margin-right: 10px;
    }

    .table-list{
        font-size: 12px;
        border-collapse: collapse;
        width: 100%;
        table-layout: fixed
    }

    .table-list table, 
    .table-list tr, 
    .table-list td, 
    .table-list th{
        border: 1px solid #DCDCDC;
        word-break: break-all;
        word-wrap: break-word;
    }

    .table-list td{
        padding: 0px 10px;
        vertical-align: top;
        padding-top: 10px;
    }
</style>



<div class="pdf_title"><?php echo $title; ?></div>

<table class="table-list">
    <thead>
        <tr>

            <th style="width: 10%">Author</th>
            <th style="width: 20%">Tags</th>
            <th style="width: 20%">Companies</th>
            <th style="width: 20%">Note Types</th>


        </tr>
    </thead>
    <tbody>

        <tr>
            <td>
                <div class="pdf_author"><?= $author ?></div>
            </td>
            <td>
                <div class="pdf-tags_wrap">
                    <div class="pdf-tag_title"> </div>
                    <?php
                    foreach ($tags as $tag) {
                    ?>
                        <div class="pdf_tag_names">
                            <?php echo $tag; ?>
                        </div>
                    <?php
                    }

                    ?>
                </div>
            </td>
            <td>
                <div class="pdf-tags_wrap">
                    <div class="pdf-tag_title"> </div>
                    <?php
                    foreach ($companies as $tag) {
                    ?>
                        <div class="pdf_tag_names">
                            <?php echo $tag; ?>
                        </div>
                    <?php
                    }

                    ?>
                </div>
            </td>
            <td>
                <div class="pdf-tags_wrap">
                    <div class="pdf-tag_title"> </div>
                    <?php
                    foreach ($notetypes as $tag) {
                    ?>
                        <div class="pdf_tag_names">
                            <?php echo $tag; ?>
                        </div>
                    <?php
                    }

                    ?>
                </div>
            </td>
           

        </tr>


    </tbody>
</table>

<div class="pdf-contents"><?= $content ?></div>