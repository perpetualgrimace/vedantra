title: Person
pages: false

fields:
  title:
    label: 'Full Name:'
    required: false
  position:
    label: 'Position:'
    type: text
    width: 1/2
  hierarchy:
    label: 'Hierarchy'
    type: select
    width: 1/2
    options:
      board: Board of Directors
      management: Management Team
  text:
    label: 'Bio:'
    type: markdown
  info:
    type: info
    text: >

      <h2>Required Images:</h2>

      <li><b>person.jpg</b> <small>(600px × 450px)</small></li>
