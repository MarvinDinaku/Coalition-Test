<div class="col-sm-8" >
        <table id="products-table"class="table table-bordered" align="center">
            <thead>
            <tr>
                <th  class="text-center">Product Name</th>
                <th  class="text-center">Quantity in stock</th>
                <th  class="text-center">Item Price</th>
                <th  class="text-center">Submission Date/Time</th>
                <th  class="text-center">Total Value</th>
                <th  class="text-center">CRUD</th>
            </tr>
            </thead>
            <tbody>

            @if( count($products) )

                <?php $sum = 0; ?>
                @foreach( $products as $product )
                    <tr data-id="{{ $product->_id }}">
                        <td class="pname"> {{ $product->pname }} </td>
                        <td class="stock text-center"> {{ $product->quantityStock }} </td>
                        <td class="price text-center"> {{ $product->price }} </td>
                        <td class="text-center"> {{ $product->createdOn }} </td>
                        <td class="total text-center">
                            <?php $sum = $sum + ($product->quantityStock * $product->price); ?>
                            {{ formatDollars( $product->quantityStock * $product->price ) }}
                        </td>
                        <td class="text-center">
                            <a href="#" class="editProductLink" data-id="{{ $product->_id }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp;&nbsp;
                            <a href="#" class="deleteProductLink" data-id="{{ $product->_id }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a href="#" class="updateProductLink" data-id="{{ $product->_id }}"><i class="fa fa-check" aria-hidden="true"></i></a>&nbsp;&nbsp;
                            <a href="#" class="cancelProductLink" data-id="{{ $product->_id }}"><i class="fa fa-times" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                @endforeach

                <tr id="totals">
                    <td colspan="4" style="border: none;"></td>
                    <td id="sum" class="text-center"
                        style="border: 2px solid #dddddd; font-weight: bold; font-size: 1.1em; background: #F8F8F8;">
                        {{ formatDollars($sum) }}
                    </td>
                    <td style="border: none;"></td>
                </tr>

            @else

                <tr>
                    <td colspan="6" class="text-center" id="noproducts">
                        <h4>There are no products</h4>
                    </td>
                </tr>

            @endif
            </tbody>
        </table>

    </div>



<?php

function formatDollars($dollars)
{
    return "$".number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $dollars)),2);
}
?>