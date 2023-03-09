# Project 2: Design Journey

**For each milestone, complete only the sections that are labeled with that milestone.** Refine all sections before the final submission.

You are graded on your design process. If you later need to update your plan, **do not delete the original plan, rather leave it in place and append your new plan _below_ the original.** Then explain why you are changing your plan. Any time you update your plan, you're documenting your design process!

**Replace ALL _TODOs_ with your work.** (There should be no TODOs in the final submission.)

Be clear and concise in your writing. Bullets points are encouraged.

**Everything, including images, must be visible in _Markdown: Open Preview_.** If it's not visible in the Markdown preview, then we can't grade it. We also can't give you partial credit either. **Please make sure your design journey should is easy to read for the grader;** in Markdown preview the question _and_ answer should have a blank line between them.


## Design Plan (Milestone 1)

**Make the case for your decisions using concepts from class, as well as other design principles, theories, examples, and cases from outside of class (includes the design prerequisite for this course).**

You can use bullet points and lists, or full paragraphs, or a combo, whichever is appropriate. The writing should be solid draft quality.


### Catalog (Milestone 1)
> What will your catalog website be about? (1 sentence)

My catalog website would be about music with beautiful performance


### Audience (Milestone 1)
> Briefly explain your site's audience. Your audience should be specific, but not arbitrarily specific. (1 sentence)
> Justify why this audience is a **cohesive** group. (1-2 sentences)

My audience would be dancers who are looking for more potential songs to dance to.

This is a cohesive group because many dancers, including myself, often find themselves in need of music recommendations to dance to or choreograph to. I would be offering a list of my personal favorites in different genres of music and they can add songs to the catalog as well.

### Audience Goals (Milestone 1)
> Document your audience's goals for using this catalog website.
> List each goal below. There is no specific number of goals required for this, but you need enough to do the job (Hint: It's more than 1. But probably not more than 3.)
> **Hint:** Users will be able to view all entries in the catalog and insert new entries into the catalog. The audience's goals should probably relate to these activities.

Goal 1: The user will be able to view all the songs that people recommend for dance as well as being able to see what genre the song is in and what type of style of dances the song could be choreographed to.

- **Design Ideas and Choices** _How will you meet those goals in your design?_
  - I will meet this goal by creating a column for each song reccomendation and columns for the name of the artist as well as introducing the genre of the music and what types of dance styles could be used to choreograph.
- **Rationale & Additional Notes** _Justify your decisions; additional notes._
  - TODO: rationale  (1-2 sentences)

Goal 2: The user will be able to add songs they want to recommend for dancing.

- **Design Ideas and Choices** _How will you meet those goals in your design?_
  - I will implement a form which adds to the database what song recommendations users have if they decide to leave a recommendation
- **Rationale & Additional Notes** _Justify your decisions; additional notes._
  - TODO: rationale (1-2 sentences)

Goal 3: The user would be able to see choreography inspiration for each song provided.

TODO: design ideas and rationale


TODO: add as many goals as needed


### Audience Device (Milestone 1)
> How will your audience access this website? From a narrow (phone) or wide (laptop) device?
> Justify your decision. (1 sentence)

Desktop Website

I think that a desktop view would make more sense since it would give a more full view of the table that I intend to create.


### Persona (Milestone 1)
> Use the goals you identified above to develop a persona of your site's audience.
> Your persona must have a name and a face. The face can be a photo of a face or a drawing, etc.

TODO: persona's face

TODO: persona name

**Factors that Influence Behavior:**

TODO: summary of the persona's factors that influence their behavior (1-2 bullet points)

**Goals:**

TODO: summary of persona's goals (1-2 bullet points)

**Obstacles:**

TODO: summary of persona's obstacles (1-2 bullet points)

**Desires:**

TODO: summary of persona's desires (1-2 bullet points)


### Catalog Data (Milestone 1)
> Using your persona, identify the data you need to include in the catalog for your site's audience.
> Justify why this data aligns with your persona's goals. (1 sentence)

TODO: list the data your persona will need to effectively use the catalog


TODO: Justify why this data aids the persona with their goals.



### Site Design (Milestone 1)
> Design your catalog website to address the goals of your persona.
> Sketch your site's design:
>
> - These are **design** sketches, not _planning_ sketches.
> - Use text in the sketches to help us understand your design.
> - Where the content of the text is unimportant, you may use squiggly lines for text.
> - **Do not label HTML elements or annotate CSS classes.** This is not a planning sketch.
>
> Provide a brief explanation _underneath_ each sketch. (1 sentence)
> **Refer to your persona by name in each explanation.**

TODO: sketch(es) + explanation


### Catalog Design Patterns (Milestone 1)
> Explain how you used design patterns for online catalogs in your site's design. (1-2 sentences)

TODO: design pattern explanation


## Implementation Plan (Milestone 1, Milestone 2)

**Provide enough detail in your plan that another 2300 student could implement your plan.**

### Database Schema (Milestone 1)
> Plan the structure of your database. You may use words or a picture.
> A bulleted list is probably the simplest way to do this.
> Make sure you include constraints for each field.

Table: music

- "name": TEXT {NOT NULL UNIQUE}
- "artist": TEXT {NOT NULL}
- "genre": TEXT {NOT NULL}
- "style": TEXT {}
- "inspiration": TEXT {}


### Database Query Plan (Milestone 1, Final Submission)
> Plan your database queries.
> You may use natural language, pseudocode, or SQL.

1. All Records (Milestone 1)

    ```
    TODO: query for all records
    $db = open_sqlite_db('secure/site.sqlite');
    $result = exec_sql_query($db, 'SELECT * FROM music;');
    $records = $result->fetchAll();
    ```

1. Insert Record (Final Submission)

    ```
    TODO: insert query
     foreach ($records as $record) { ?>
        <tr>
          <td><?php echo htmlspecialchars( $record['name'] ); ?></td>
          <td><?php echo htmlspecialchars( $record['artist'] ); ?></td>
          <td><?php echo htmlspecialchars( $record['genre' ] ); ?></td>
          <td><?php echo htmlspecialchars( $record['style'] ); ?></td>
          <td><?php echo htmlspecialchars( $record['inspiration'] ); ?></td>
        </tr>
    ```


### From Validation (Milestone 2)
> Plan the validation criteria for each piece of form data.

- TODO: form data name
  - TODO: form data criteria
- TODO: form data name
  - TODO: form data criteria
- TODO: form data name
  - TODO: form data criteria
- ...


### Form Planning (Milestone 2)
> Plan your form validation using **pseudocode**.

```
TODO: Form validation pseudocode
```


### Form Test Data (Milestone 2)
> For each piece of form data, provide samples of valid and invalid data for testing.

**Valid Test Data:**

- TODO: form data name: "TODO: sample valid data"
- TODO: form data name: "TODO: sample valid data"
- TODO: form data name: "TODO: sample valid data"
- ...

**Invalid Test Data:**

- TODO: form data name: "TODO: sample invalid data"
- TODO: form data name: "TODO: sample invalid data"
- TODO: form data name: "TODO: sample invalid data"
- ...


## Complete & Polished Website (Final Submission)

### Accessibility Audit (Final Submission)
> Tell us what issues you discovered during your accessibility audit.
> What do you do to improve the accessibility of your site?

TODO: audit fixes


### Self-Reflection (Final Submission)
> Reflect on what you learned during this assignment. How have you improved from Project 1? What would you do differently next time? (2-3 sentences)

TODO: reflection


> Take some time here to reflect on how much you've learned since you started this class. It's often easy to ignore our own progress. Take a moment and think about your accomplishments in this class. Hopefully you'll recognize that you've accomplished a lot and that you should be very proud of those accomplishments! (1-3 sentences)

TODO: reflection


### Collaborators (Final Submission)
> List any persons you collaborated with on this project.

TODO: list your collaborators


### Reference Resources (Final Submission)
> Please cite any external resources you referenced in the creation of your project.
> (i.e. W3Schools, StackOverflow, Mozilla, etc.)

TODO: list reference resources
