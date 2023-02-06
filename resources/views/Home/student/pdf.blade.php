<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    pdf
  </title>

  <style>

    p{
      text-align: justify;
    }
    .main
    {
      width: 100%;
      text-align: center;
      margin: auto;
      border: 1px solid grey;
      padding: 5px;
    }
    .basic_info
    {
      display: flex;
      justify-content: space-between;
      gap: 20px;
    }
    /* img,.info1, .info2
    {
      padding: 10px;
    } */

    .table
    {
        width: 100%;
    }
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
    .tr_head
    {
      background-color: aquamarine;
    }

  </style>
</head>
<body>

  <div class="main">

    <div class="basic_info">
      <div class="img">
        <p>Image <br/>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus soluta autem laborum assumenda fugiat repellat labore in voluptas aspernatur, iure quos atque quo laudantium tempora, placeat, pariatur at veritatis alias repellendus. Vitae modi deleniti porro, magni similique minima in, harum perspiciatis dolor atque amet animi, accusamus quis. Assumenda consequuntur nulla nisi eveniet architecto? Hic sunt obcaecati a id aut minima magni. Dignissimos unde fuga ducimus! Repudiandae accusamus odit qui, enim quidem itaque dolores, libero alias, architecto ipsa totam eius perspiciatis. Consectetur, provident facilis. Odio, alias magni tenetur inventore voluptatibus explicabo facere! Sunt deserunt itaque labore exercitationem laboriosam quia perspiciatis hic.</p>
      </div>
      <div class="info1">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti minima quaerat aperiam consequuntur? Exercitationem officiis saepe voluptatem quasi laboriosam fugit amet consequatur, aliquid atque recusandae. Dolores quo adipisci reiciendis architecto, debitis blanditiis inventore nostrum? Omnis dignissimos aperiam voluptatum nemo modi tempore unde at ex tempora iste, laborum sed sequi voluptates corrupti sit temporibus neque doloremque, enim nobis libero officia incidunt ab fugit pariatur. Veniam culpa corporis molestiae laudantium beatae rerum aut adipisci ea ad laboriosam quos commodi quis, sint fugit harum iste modi ipsa reiciendis molestias rem dolorem velit. Atque eaque autem numquam blanditiis maiores unde architecto veniam possimus animi?</p>
      </div>
      <div class="info2">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque sequi, consequatur magni voluptate odit corrupti quasi. Recusandae dolor eveniet dolorem voluptates voluptatum aut adipisci dolorum quo saepe ex aliquam expedita obcaecati quos quaerat non dicta quae ipsa, accusantium cupiditate illo, repudiandae aliquid. Veniam obcaecati voluptas ullam aliquam, perferendis, harum a enim alias voluptatum repellat assumenda officiis voluptate ratione. Autem aut dolore quas repellendus ad distinctio nobis veritatis adipisci. Blanditiis nostrum quos rerum incidunt optio. Ipsa, veniam! Nihil, soluta ea impedit optio, quod nostrum perferendis tempore in quis quisquam non obcaecati numquam? Enim rerum quia assumenda laborum iure voluptatibus, at aut.</p>
      </div>
    </div>

    <div class="table">
      <h1>Address and Contact</h1>
    <table>
      <tr class="tr_head">
        <th>Company</th>
        <th>Contact</th>
        <th>Country</th>
        <th>Contact</th>
        <th>Country</th>
      </tr>
      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>

      </tr>

    </table>

    </div>

  </div>

</body>
</html>
