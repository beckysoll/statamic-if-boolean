# statamic-if-boolean
A statamic 2.0 modifier that filters a multidimensional array (grid,bard,etc.) by a boolean field.


Copy `IfBoolean` folder into `/site/addons/`.

## Usage


- The first parameter should be the name of the boolean field within each set/row of the array field.
- The (optional) second parameter can be set to `false` to reverse the logic.

### If your data looks like this

```yaml
ghosts:
  - 
    name: Casper
  - 
    name: Slimer
  - 
    name: Nearly Headless Nick
    humanoid: true
  - 
    name: Stay Puffed
  - 
    name: Captain Daniel Gregg
    humanoid: true

```


### Template

```html
<ul>
{{ ghosts if_boolean="humanoid" }}
  <li>{{ name }}</li>
{{ /ghosts }}
</ul>
<hr>
<ul>
{{ ghosts if_boolean="humanoid:false" }}
  <li>{{ name }}</li>
{{ /ghosts }}
</ul>
```

### Outputs

```
<ul>
  <li>Nearly Headless Nick</li>
  <li>Captain Daniel Gregg</li>

</ul>
<hr>
<ul>
  <li>Casper</li>
  <li>Slimer</li>
  <li>Stay Puffed</li>

</ul>
```

_Tasty ipsum provided by http://www.cheeseipsum.co.uk/_