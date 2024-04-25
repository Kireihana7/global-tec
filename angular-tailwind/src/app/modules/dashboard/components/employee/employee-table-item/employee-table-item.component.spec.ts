import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EmployeeTableItemComponent } from './employee-table-item.component';

describe('EmployeeTableItemComponent', () => {
  let component: EmployeeTableItemComponent;
  let fixture: ComponentFixture<EmployeeTableItemComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
    imports: [EmployeeTableItemComponent],
}).compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(EmployeeTableItemComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
