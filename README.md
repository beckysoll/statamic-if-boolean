# statamic-if-boolean
A statamic 2.0 modifier that filters a multidimensional array (grid,bard,etc.) by a boolean/toggle field.


Copy `IfBoolean` folder into `/site/addons/`.

## Usage


- The first parameter should be the name of the boolean/toggle field to filter by.
- The (optional) second parameter can be set to `false` for the opposite results.

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
    name: Stay Puft
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
<br>
<ul>
{{ ghosts if_boolean="humanoid:false" }}
  <li>{{ name }}</li>
{{ /ghosts }}
</ul>
```

### Outputs

<ul>
  <li>Nearly Headless Nick</li>
  <li>Captain Daniel Gregg</li>
</ul>
<br>
<ul>
  <li>Casper</li>
  <li>Slimer</li>
  <li>Stay Puft</li>
</ul>
