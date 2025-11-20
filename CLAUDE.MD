# Claude AI Development Rules

## Language
**IMPORTANT:** All code, comments, documentation, and project content must be in English. This includes:
- Code comments
- Variable names and function names
- Documentation files
- Component descriptions and titles
- Commit messages
- Configuration files

## SDC Component Development

### Attributes
**IMPORTANT:** Attributes come from Drupal. Do not define `attributes` properties in SDC Component YAML files (`*.component.yml`). Drupal automatically provides the attributes, so they should not be explicitly defined in component definitions.

### Unique Prop and Slot Names Within Components
**IMPORTANT:** Within each SDC component, prop names and slot names must be unique. A component cannot have a prop and a slot with the same name. This prevents naming conflicts and ensures clear component APIs. When creating or modifying components, verify that prop and slot names are unique within each component.

