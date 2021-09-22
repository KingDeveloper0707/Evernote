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

    .table-list {
        font-size: 12px;
        border-collapse: collapse;
        width: 100%;
        table-layout: fixed
    }

    .table-list table,
    .table-list tr,
    .table-list td,
    .table-list th {
        border: 1px solid #DCDCDC;
        word-break: break-all;
        word-wrap: break-word;
    }

    .table-list td {
        padding: 0px 10px;
        vertical-align: top;
        padding-top: 10px;
    }

    .pdf-contents {
        margin-bottom: 50px;
    }

    .pdf_title_large {
        font-size: 36px;
        font-weight: 600;
        font-family: 'Inter';
        border-bottom: 1px solid black;
        padding-bottom: 20px;
        margin-bottom: 20px;
    }



    .pdf_result_title {
        font-size: 16px;
        font-family: 'Inter';
        font-weight: 600;
    }

    .pdf_result_contents {
        border-bottom: 1px solid black;
        padding-top: 20px;
        margin-bottom: 20px;
        font-size:1px;
        color: white;

    }

    .pdf_title_left {
        font-size: 20px;
        font-weight: 600;
        font-family: 'Inter';
        width: 230px;

    }

    .pdf_title_right {
        font-size: 20px;
        font-weight: 600;
        font-family: 'Inter';

    }

    .pdf_search_terms_element {
        display: -webkit-box;
        display: -webkit-flex;
        -webkit-flex-wrap: wrap;
        display: flex;
        flex-wrap: wrap;

    }


    .pdf_result_list_wrap {
        font-size: 26px;
        font-weight: 600;
        font-family: 'Inter';
        border-top: 1px solid black;
        padding-top: 20px;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .table-list_hide {
        font-size: 12px;
        border-collapse: collapse;
        width: 100%;
        table-layout: fixed
    }

    .table-list_hide table,
    .table-list_hide tr,
    .table-list_hide td,
    .table-list_hide th {
        border: 1px solid #fff;
        word-break: break-all;
        word-wrap: break-word;
    }

    .table-list_hide td {
        padding: 0px 10px;
        vertical-align: top;
        padding-top: 10px;
    }
</style>

<div class="pdf_title_large">Notes Search Results</div>

<table class="table-list_hide">
    <thead>
        <tr style="display: none;">

            <th style="width: 230px; ">search</th>
            <th style="width: 50%; ">Terms</th>



        </tr>
    </thead>
    <tbody>


        <?php
        foreach ($search_terms as $search_term) {
        ?>

            <tr>
                <td>
                    <div class="pdf_title_left">Tag:</div>
                </td>
                <td>
                    <div class="pdf_title_right"><?php echo $search_term['tags_terms']; ?></div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="pdf_title_left">Author:</div>
                </td>
                <td>
                    <div class="pdf_title_right"><?php echo $search_term['author_terms']; ?></div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="pdf_title_left">Role:</div>
                </td>
                <td>
                    <div class="pdf_title_right"><?php echo $search_term['role_terms']; ?></div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="pdf_title_left">Company:</div>
                </td>
                <td>
                    <div class="pdf_title_right"><?php echo $search_term['company_terms']; ?></div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="pdf_title_left">Note Type:</div>
                </td>
                <td>
                    <div class="pdf_title_right"><?php echo $search_term['note_type_terms']; ?></div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="pdf_title_left">Search Parameters:</div>
                </td>
                <td>
                    <div class="pdf_title_right"><?php echo $search_term['search_paramenter']; ?></div>
                </td>
            </tr>
    </tbody>
</table>


<?php
        }
?>

<div class="pdf_result_list_wrap">RESULTS LIST</div>

<?php
foreach ($notes_data as $note_data) {
?>
    <div class="pdf_result_title"><?php echo $note_data['title']; ?></div>

<?php
}
?>

<div class="pdf_result_contents">contents</div>


<?php
foreach ($notes_data as $note_data) {
?>
    <div class="pdf_title"><?php echo $note_data['title']; ?></div>

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
                    <div class="pdf_author"><?= $note_data['author'] ?></div>
                </td>
                <td>
                    <div class="pdf-tags_wrap">
                        <div class="pdf-tag_title"> </div>
                        <?php
                        foreach ($note_data['tags'] as $tag) {
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
                        foreach ($note_data['companies'] as $tag) {
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
                        foreach ($note_data['notetypes'] as $tag) {
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

    <div class="pdf-contents"><?= $note_data['content'] ?></div>

<?php
}

?>